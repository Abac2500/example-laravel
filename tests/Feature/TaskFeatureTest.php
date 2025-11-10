<?php

use App\Models\Task;
use App\Models\User;
use App\Notifications\NewTask;
use Illuminate\Support\Facades\Notification;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('shows all tasks on index view=all ordered and paginated', function () {
    $user = User::factory()->create();
    actingAs($user);

    $tasks = Task::factory()
        ->count(7)
        ->for(User::factory())
        ->sequence(
            ['expiration_at' => now()->addDays(1)],
            ['expiration_at' => now()->addDays(3)],
            ['expiration_at' => now()->addDays(2)],
            ['expiration_at' => now()->addDays(7)],
            ['expiration_at' => now()->addDays(6)],
            ['expiration_at' => now()->addDays(5)],
            ['expiration_at' => now()->addDays(4)],
        )
        ->create();

    $response = get(route('task.index', ['view' => 'all']));

    $response->assertOk();
    $response->assertViewHas('tasks', function ($paginator) use ($tasks) {
        if ($paginator->perPage() !== 5) {
            return false;
        }
        $expectedIds = $tasks->sortByDesc('expiration_at')
            ->pluck('id')
            ->take(5)
            ->values()
            ->all();

        $actualIds = collect($paginator->items())
            ->pluck('id')
            ->values()
            ->all();

        return $expectedIds === $actualIds;
    });
});

it('shows only current user tasks on index view=user', function () {
    $me = User::factory()->create();
    $other = User::factory()->create();
    actingAs($me);

    $mine = Task::factory()->count(3)->for($me)->create();
    Task::factory()->count(2)->for($other)->create();

    $response = get(route('task.index', ['view' => 'user']));

    $response->assertOk();
    $response->assertViewHas('tasks', function ($paginator) use ($mine) {
        $ids = collect($paginator->items())->pluck('id');
        return $ids->sort()->values()->all() === $mine->pluck('id')->sort()->values()->all();
    });
});

it('creates a new task with valid data and flashes success', function () {
    Notification::fake();

    $author = User::factory()->create();
    $assignee = User::factory()->create();
    actingAs($author);

    $payload = [
        'user_id' => $assignee->id,
        'name' => 'Новая задача',
        'text' => 'Новое описание задачи',
        'expiration_at' => now()->addDay()->toDateTimeString(),
    ];

    $response = post(route('task.save'), $payload);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('tasks', [
        'user_id' => $assignee->id,
        'name' => 'Новая задача',
        'text' => 'Новое описание задачи',
    ]);

    Notification::assertSentTo($assignee, NewTask::class);
});

it('does not send notification when author assigns task to self', function () {
    Notification::fake();

    $author = User::factory()->create();
    actingAs($author);

    $payload = [
        'user_id' => $author->id,
        'name' => 'Новая задача',
        'text' => 'Новое описание задачи',
        'expiration_at' => now()->addDay()->toDateTimeString(),
    ];

    $response = post(route('task.save'), $payload);

    $response->assertRedirect();

    Notification::assertNothingSent();
});

it('validates inputs when saving task', function () {
    $user = User::factory()->create();
    actingAs($user);

    $response = post(route('task.save'), []);

    $response->assertInvalid(['user_id', 'name', 'text', 'expiration_at']);
});

it('updates a task when authorized', function () {
    $user = User::factory()->create();
    actingAs($user);

    $task = Task::factory()->for($user)->create([
        'name' => 'Новая задача',
        'text' => 'Новое описание задачи',
    ]);

    $payload = [
        'user_id' => $user->id,
        'name' => 'Новая задача (New)',
        'text' => 'Новое описание задачи (New)',
        'expiration_at' => now()->addDays(2)->toDateTimeString(),
    ];

    $response = post(route('task.save', ['task' => $task->id]), $payload);

    $response->assertRedirect(route('task.store', ['task' => $task->id]));
    $response->assertSessionHas('success');

    $task->refresh();
    expect($task->name)->toBe('Новая задача (New)');
    expect($task->text)->toBe('Новое описание задачи (New)');
});

it('forbids updating a task by non-owner', function () {
    $owner = User::factory()->create();
    $stranger = User::factory()->create();

    actingAs($owner);
    $task = Task::factory()->for($owner)->create();

    actingAs($stranger);

    post(route('task.save', ['task' => $task->id]), [
        'user_id' => $owner->id,
        'name' => 'Новая задача (New)',
        'text' => 'Новое описание задачи (New)',
        'expiration_at' => now()->addDay()->toDateTimeString(),
    ])->assertForbidden();
});

it('deletes a task for owner and flashes success', function () {
    $owner = User::factory()->create();

    actingAs($owner);
    $task = Task::factory()->for($owner)->create();

    $response = get(route('task.delete', ['task' => $task->id]));

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertModelMissing($task);
});
