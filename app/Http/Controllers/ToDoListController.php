<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class ToDoListController extends Controller
{
    //traz primeiro as tarefas que não estão completas
    public function index()
    {
        return view('welcome', ['tarefas' => Tarefa::where('is_complete', 0)->get()]);
    }

    public function markComplete($id)
    {
        $listItem = Tarefa::find($id);
        $listItem->is_complete = 1;
        $listItem->save();

        return redirect('/');
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
}
