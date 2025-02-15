<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::resource('tasks', TasksController::class);


Route::get('/', function () {
    return view('welcome');
});
