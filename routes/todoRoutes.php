<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/todo', [TodoController::class, 'index'])
    ->middleware('auth')
    ->name('todo.index');

Route::post('/nova-tarefa', [TodoController::class, 'store'])
    ->middleware('auth')
    ->name('todo.store');

Route::get('todo/edit/{tarefa}', [TodoController::class, 'edit'])
    ->middleware('auth')
    ->name('todo.edit');

Route::post('todo/update/{tarefa}', [TodoController::class, 'update'])
    ->middleware('auth')
    ->name('todo.update');

Route::get('todo/delete/{tarefa}', [TodoController::class, 'delete'])
    ->middleware('auth')
    ->name('todo.delete');

Route::get('todo/alterar-status/{tarefa}', [TodoController::class, 'alterarStatusTarefa'])
    ->middleware('auth')
    ->name('todo.alterarStatus');
