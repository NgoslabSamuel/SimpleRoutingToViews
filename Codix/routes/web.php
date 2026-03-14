<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [GreetController::class, 'show']);

Route::resource('tasks', TaskController::class);
