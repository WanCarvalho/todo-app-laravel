<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();

            return redirect()->route('todo.index');
        } else {
            return redirect()->back()->withErrors('Usuário ou senha inválida.');
        }
    }
}
