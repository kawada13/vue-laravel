<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->content = $request->content;
        $task->save();
        // return Task::create($request->all());
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $task->title = $request->title;
        $task->content = $request->content;
        $task->save();

        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return $task;
    }

    public function search(Request $request)
    {
        $tasks = Task::where('title', 'like', "%$request->keyword%")->get();

        return $tasks;
    }
}
