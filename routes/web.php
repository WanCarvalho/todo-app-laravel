<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

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

Route::get('/', [ToDoListController::class, 'index']);

Route::post('/saveItemRoute', [ToDoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markCompleteRoute/{id}', [ToDoListController::class, 'markComplete'])->name('markComplete');

Route::put('/atualizaTarefaRoute/{id}', [ToDoListController::class, 'atualizaTarefa'])->name('atualizaTarefa');

Route::delete('/apagaTarefaRoute/{id}', [ToDoListController::class, 'apagaTarefa'])->name('apagaTarefa');
