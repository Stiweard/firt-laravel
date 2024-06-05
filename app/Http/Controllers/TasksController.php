<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{

    // create tasks
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3'
        ]);

        $task = new Task;
        $task->title = $request->title;
        $task->save();

        return redirect()->route('task')->with('success', 'task created successfully');
    }

    // get all tasks
    public function index()
    {
        $tasks = Task::all();

        if ($tasks->isEmpty()) {
            // Si $tasks está vacío
            return view('task.index', ['tasks' => $tasks, 'message' => 'No tasks found']);
        }

        return view('task.index', ['tasks' => $tasks]);
    }

    // get task
    public function show($id)
    {
        $task = Task::find($id);
        return view('task.show', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3'
        ]);

        $task = Task::find($id);
        $task->title = $request->title;
        $task->save();

        return redirect()->route('task')->with('success', 'task updated successfully');
    }

    public function destroy($id){
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('task')->with('success', 'task deleted successfully');
    }

}

