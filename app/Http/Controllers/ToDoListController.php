<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class ToDoListController extends Controller
{
    //traz primeiro as tarefas que não estão completas
    public function index()
    {

        $array = [0, 1];
        //return view('welcome', ['tarefas' => Tarefa::where('is_complete', 0)->get()]);

        //retorna view com as tarefas ordenadas pelo valor da coluna 'is_complete'
        return view('welcome', ['tarefas' => Tarefa::whereIn('is_complete', $array)->get()->sortBy('is_complete')]);
    }

    public function saveItem(Request $request)
    {

        //salvando item no banco de dados
        $newListItem = new Tarefa;
        $newListItem->tarefa = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return redirect('/'); //volta para página inicial após alterações
    }

    public function markComplete($id)
    {
        $listItem = Tarefa::find($id);
        $listItem->is_complete = 1;
        $listItem->save();

        return redirect('/');
    }

    public function atualizaTarefa(Request $request, $id){

        $listItem = Tarefa::find($id);
        $listItem->tarefa = $request->inputTarefa;
        $listItem->update();

        return redirect('/');
    }

    public function apagaTarefa($id)
    {
        $listItem = Tarefa::find($id);
        $listItem->delete();

        return redirect('/');
    }
}
