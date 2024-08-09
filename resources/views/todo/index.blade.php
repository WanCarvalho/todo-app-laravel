<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">

        <x-navbar />

        <div class="row w-100">
            <div class="d-flex justify-content-center align-items-center mt-5">

                <div class="card text-center w-75 p-5">
                    <x-alert-error />
                    <x-alert-success />

                    <form action="{{ route('todo.store') }}" method="POST">
                        @csrf

                        <div class="card p-4">
                            <div class="card-header">
                                <h5>Nova Tarefa</h5>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" name="titulo" class="form-control" id="floatingInput"
                                    placeholder="Título">
                                <label for="floatingInput">Título</label>
                            </div>
                            <div class="form-floating mt-3">
                                <textarea name="descricao" class="form-control" placeholder="Descrição" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Descrição</label>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button class="btn btn-success" type="submit">Salvar</button>
                            </div>
                        </div>
                    </form>

                    <table class="table table-bordered table-striped table-hover mt-4">
                        <thead>
                            <tr>
                                <th colspan="3">Tarefas</th>
                            </tr>
                            <tr>
                                <th>Título</th>
                                <th>Descrição</th>
                                <td>Status</td>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tarefas as $item)
                                <tr>
                                    <td>{{ $item->titulo }}</td>
                                    <td>{{ $item->descricao }}</td>
                                    @if ($item->concluido)
                                        <td>
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('todo.alterarStatus', ['tarefa' => $item]) }}"
                                                title="Alterar Status">Concluído
                                            </a>
                                        </td>
                                    @else
                                        <td>
                                            <a class="btn btn-warning btn-sm"
                                                href="{{ route('todo.alterarStatus', ['tarefa' => $item]) }}"
                                                title="Alterar Status">Não concluído
                                            </a>
                                        </td>
                                    @endif
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('todo.edit', ['tarefa' => $item]) }}" title="Editar">Editar
                                        </a>
                                        <a class="btn btn-danger btn-sm"
                                            href="{{ route('todo.delete', ['tarefa' => $item]) }}"
                                            title="Excluir">Excluir
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</body>

</html>
