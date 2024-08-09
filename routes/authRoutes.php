<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::post('/login', [LoginController::class, 'auth'])
    ->name('auth.entrar');

Route::get('/cadastro', [UserController::class, 'create'])
    ->name('auth.cadastro');

Route::post('/cadastro', [UserController::class, 'store'])
    ->name('auth.cadastrar');
