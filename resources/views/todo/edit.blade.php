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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">

        <x-navbar />

        <div class="row w-100">
            <div class="d-flex justify-content-center align-items-center mt-5">

                <div class="card text-center w-75 p-5">
                    <x-alert-error />
                    <x-alert-success />

                    <form action="{{ route('todo.update', ['tarefa' => $tarefa]) }}" method="POST">
                        @csrf

                        <div class="card p-4">
                            <div class="card-header">
                                <h5>Editar Tarefa</h5>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" name="titulo" class="form-control" id="floatingInput"
                                    placeholder="Título" value="{{ $tarefa->titulo }}">
                                <label for="floatingInput">Título</label>
                            </div>
                            <div class="form-floating mt-3">
                                <textarea name="descricao" class="form-control" placeholder="Descrição" id="floatingTextarea2" style="height: 100px">{{ $tarefa->descricao }}</textarea>
                                <label for="floatingTextarea2">Descrição</label>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <a class="btn btn-secondary w-100" href="{{ route('todo.index') }}">Cancelar</a>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-success w-100" type="submit">Atualizar</button>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
</body>

</html>
