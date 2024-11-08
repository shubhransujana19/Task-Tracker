<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display all tasks
    public function index()
    {
        $tasks = Task::all();
        // return view('tasks.index', compact('tasks'));

        return view('home', compact('tasks'));

    }

    public function create(){
        return view('home');
    }

   // Store a new task in the database
   public function store(Request $request)
   {
       Task::create($request->all());
       return redirect()->route('tasks.index');
   }

   public function edit( $id ){
    $task = Task::findOrFail($id);

    return view('tasks.edit', compact('task'));
   }

   public function update(Request $request, $id){

     $task = Task::findOrFail($id);
     $task->task_name = $request->input('task_name');
     $task->is_complete = $request->input('is_complete')? 1: 0;

    $task->save();
    return redirect()->route('tasks.index');
   }

   public function destroy( $id){

    $task = Task::findOrFail($id);

    $task->delete();

    return redirect()->route('tasks.index');
   }

   public function updateIsComplete(Request $request, $id){

    $task = Task::findOrFail($id);

    $task->is_complete = $request->input('is_complete')? 1 : 0;

    $task->save();
    return redirect()->route('tasks.index');

   }
}
