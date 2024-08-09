<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarioAtualID = auth()->user()->id;
        $tarefas = Todo::where('user_id', $usuarioAtualID)->get();

        return view('todo.index', compact('tarefas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $novaTarefa = new Todo();
        $novaTarefa->titulo = $request->input('titulo');
        $novaTarefa->descricao = $request->input('descricao');
        $novaTarefa->user_id = auth()->user()->id;
        $statusStore = $novaTarefa->save();

        if ($statusStore) {
            return redirect()->route('todo.index')->withSuccess('Tarefa adicionada com sucesso.');
        } else {
            return redirect()->route('todo.index')->withSuccess('Erro ao adicionar nova tarefa.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($tarefa)
    {
        $tarefa = Todo::find($tarefa);

        return view('todo.edit', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $tarefa)
    {
        $tarefa = Todo::find($tarefa);
        $tarefa->titulo = $request->input('titulo');
        $tarefa->descricao = $request->input('descricao');
        $statusUpdate = $tarefa->update();

        if ($statusUpdate) {
            return redirect()->route('todo.index')->withSuccess('Tarefa atualizada com sucesso.');
        } else {
            return redirect()->route('todo.index')->withSuccess('Erro ao atualizar a tarefa.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($tarefa)
    {
        $tarefa = Todo::find($tarefa);
        $statusDelete = $tarefa->delete();

        if ($statusDelete) {
            return redirect()->route('todo.index')->withSuccess('Tarefa excluída com sucesso.');
        } else {
            return redirect()->route('todo.index')->withSuccess('Erro ao excluir a tarefa.');
        }
    }

    public function alterarStatusTarefa($tarefa){
        $tarefa = Todo::find($tarefa);

        if($tarefa->concluido){
            $tarefa->concluido = false;
            $tarefa->update();

            return redirect()->route('todo.index')->withSuccess('Tarefa desmarcada como concluída.');
        } else {
            $tarefa->concluido = true;
            $tarefa->update();

            return redirect()->route('todo.index')->withSuccess('Tarefa marcada como concluída.');
        }
        
    }
}
