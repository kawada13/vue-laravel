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
        $task->person_in_charge = $request->person_in_charge;
        $task->save();
        // return Task::create($request->all());
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $task->title = $request->title;
        $task->content = $request->content;
        $task->person_in_charge = $request->person_in_charge;
        $task->save();

        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return $task;
    }
}
