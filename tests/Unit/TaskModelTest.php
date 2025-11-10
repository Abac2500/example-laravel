<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Carbon;
use function Pest\Laravel\actingAs;

it('has a user relation that returns the owner', function () {
    $user = User::factory()->create();

    actingAs($user);

    $task = Task::factory()->for($user)->create();

    expect($task->user)->toBeInstanceOf(User::class)
        ->and($task->user->is($user))->toBeTrue();
});

it('fills mass assignable attributes and casts expiration_at to datetime', function () {
    $user = User::factory()->create();

    actingAs($user);

    $expiration = now()->addDays(3);
    $data = [
        'user_id' => $user->id,
        'name' => 'Новая задача',
        'text' => 'Новое описание задачи',
        'expiration_at' => $expiration,
    ];

    $task = new Task();
    $task->fill($data);
    $task->save();

    expect($task->name)->toBe('Новая задача')
        ->and($task->text)->toBe('Новое описание задачи')
        ->and($task->user_id)->toBe($user->id);

    expect($task->expiration_at)->toBeInstanceOf(Carbon::class)
        ->and($task->expiration_at->toDateString())->toBe($expiration->toDateString());

    test()->assertDatabaseHas('tasks', [
        'id' => $task->id,
        'user_id' => $user->id,
        'name' => 'Новая задача',
        'text' => 'Новое описание задачи',
    ]);
});
