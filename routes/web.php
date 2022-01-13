<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tasks.dashboard');
});

Route::get('tasks/{number}', \App\Http\Controllers\TasksController::class)->name('tasks.show');

Route::get('taskone', \App\Http\Controllers\TaskOneController::class);
