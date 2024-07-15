<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskService
{
    public function getAllTasks()
    {
        return Task::all();
    }

    public function createTask(array $data)
    {
        return Task::create($data);
    }

    public function getTaskById(int $id)
    {
        return Task::findOrFail($id);
    }

    public function updateTask(Task $task, array $data)
    {
        $task->update($data);
        return $task;
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
    }
    public function searchTasks(array $filters)
    {
        $query = Task::query();

        if (isset($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if (isset($filters['deadline'])) {
            $query->whereDate('deadline', $filters['deadline']);
        }
        return $query->get();
    }
}
