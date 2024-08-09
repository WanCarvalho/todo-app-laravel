<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Autentica o usuário para acesso ao sistema.
     * 
     * @param Request $request Dados do usuário para autenticação.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();

            return redirect()->route('todo.index');
        } else {
            return redirect()->back()->withErrors('Usuário ou senha inválida.');
        }
    }

    /**
     * Faz logout do usuário atualmente autenticado.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login')->withSuccess('Você foi desconectado com sucesso!');
    }
}
