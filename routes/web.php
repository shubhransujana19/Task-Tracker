<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
// In routes/web.php
Route::put('tasks/{id}/updateIsComplete', [TaskController::class, 'updateIsComplete'])->name('tasks.updateIsComplete');

Route::resource('tasks', TaskController::class);

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {

    $jobs = Job::getAllJobs();
    return view('jobs', ['jobs' => $jobs ]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('job',['job' => $job ] );
});


