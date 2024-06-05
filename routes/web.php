<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// reder laravel
Route::get('/', function () {
    return view('welcome');
});

// get tasks
Route::get('/app', [TasksController::class,'index'])->name('task');

// get task
Route::get('/app7{id}', [TasksController::class,'show'])->name('task-show');

// create a new task
Route::post('/app', [TasksController::class,'store'])->name('task');

// update a task
Route::patch('/app', [TasksController::class,'update'])->name('task-update');

// delete a task
Route::delete('/app/{id}', [TasksController::class,'destroy'])->name('task-destroy');

Route::resource('categories',CategoriesController::class);