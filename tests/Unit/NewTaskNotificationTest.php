<?php

use App\Models\Task;
use App\Models\User;
use App\Notifications\NewTask;
use function Pest\Laravel\actingAs;

it('uses broadcast channel only and builds expected array payload', function () {
    $author = User::factory()->create(['email' => 'author@example.com']);
    $assignee = User::factory()->create();

    actingAs($assignee);
    $task = Task::factory()->for($assignee)->create([
        'name' => 'Новая задача',
    ]);

    $notification = new NewTask($author, $task);

    expect($notification->via($assignee))->toBe(['broadcast']);

    $payload = $notification->toArray($assignee);

    expect($payload)->toHaveKeys(['id', 'user', 'name'])
        ->and($payload['user'])->toBe('author@example.com')
        ->and($payload['name'])->toBe('Новая задача');
});
