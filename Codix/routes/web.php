<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// Simple hello route
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Greet route
Route::get('/greet', [GreetController::class, 'show']);

// Redirect homepage to Task Manager
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// Resource routes for Task CRUD
Route::resource('tasks', TaskController::class);
