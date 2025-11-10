<?php

namespace App\Observers;

use App\Models\Task;
use App\Notifications\NewTask;

class TaskObserver
{
    /**
     * Handle the Task "created" event.
     */
    public function created(Task $task): void
    {
        if ($task->user_id !== auth()->id()) {
            $task->user->notify(new NewTask(auth()->user(), $task));
        }
    }
}
