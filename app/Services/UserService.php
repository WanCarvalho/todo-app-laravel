<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class UserService
{
    /**
     * Serviço para salvar usuário no banco de dados.
     * 
     * @param Request $request Dados do controller.
     * @return array
     */
    public function store(Request $request)
    {
        if ($request->input('password') != $request->input('password-confirm')) {
            return [
                'success' => false,
                'message' => 'As senhas não coincidem.'
            ];
        }

        $user = new User();
        $user->name = $request->input('nome');
        $user->sobrenome = $request->input('sobrenome');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return [
            'success' => true,
            'message' => 'Usuário cadastrado com sucesso.'
        ];
    }
}
