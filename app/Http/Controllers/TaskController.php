<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Вывод списка задач.
     *
     * @param string $view
     * @return View
     */
    public function index(string $view): View
    {
        $title = 'Список задач';

        $tasks = match ($view) {
            'all' => new Task(),
            'user' => auth()->user()->tasks(),
        };
        $tasks = $tasks
            ->orderByDesc('expiration_at')
            ->paginate(5);

        return view('page.task.index', compact('tasks', 'title'));
    }

    /**
     * Редактирование или создание задачи.
     *
     * @param Task|null $task
     * @return View
     */
    public function store(?Task $task): View
    {
        $title = 'Новая задача';
        if ($task?->id) {
            Gate::authorize('update', $task);
            $title = "Редактирование - $task->name";
        }

        $users = User::all();

        return view('page.task.store', compact('task', 'users', 'title'));
    }

    /**
     * Сохранение задачи.
     *
     * @param Request $request
     * @param Task|null $task
     * @return RedirectResponse
     */
    public function save(Request $request, ?Task $task): RedirectResponse
    {
        if ($task?->id) {
            Gate::authorize('update', $task);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string|max:1024',
            'user_id' => 'required|integer|exists:App\Models\User,id',
            'expiration_at' => 'required|date',
        ], [], [
            'name' => 'Название',
            'text' => 'Описание',
            'user' => 'Исполнитель',
            'expiration_at' => 'Дата окончания срока',
        ]);

        $task ??= new Task();
        $task->fill($validated);
        $task->save();

        return to_route('task.store', ['task' => $task->id])
            ->with('success', 'Задача успешно сохранена');
    }

    /**
     * Удаление задачи.
     *
     * @param Task $task
     * @return RedirectResponse
     */
    public function delete(Task $task): RedirectResponse
    {
        $task->delete();

        return back()->with('success', 'Вы успешно удалили задачу');
    }
}
