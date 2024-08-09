<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Rotas de autenticação
Route::group([], base_path('routes/authRoutes.php'));

// Rotas da lista Todo
Route::group([], base_path('routes/todoRoutes.php'));
