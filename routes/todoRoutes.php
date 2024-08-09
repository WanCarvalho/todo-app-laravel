<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/todo', [TodoController::class, 'index'])
    ->middleware('auth')
    ->name('todo.index');
