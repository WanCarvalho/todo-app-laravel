<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Retorna view para cadastrar usuário.
     */
    public function create()
    {
        return view('auth.cadastro');
    }

    /**
     * Salva novo usuário no banco de dados.
     * 
     * @param Request $request Dados do form de cadastro.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3',
        ]);

        $novoUser = $this->userService->store($request);

        if($novoUser['success']){
            Auth::attempt([
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password'))
            ]);

            return redirect()->route('todo.index')->withSuccess($novoUser['message'])->withInput();
        } else {
            return redirect()->back()->withErrors($novoUser['message'])->withInput();
        }
    }
}
