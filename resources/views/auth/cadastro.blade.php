<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50" height="100vh">
    <div class="container-fluid">

        <div class="row w-100">
            <div class="d-flex justify-content-center align-items-center mt-5">


                <div class="card text-center w-50 p-5">

                    <x-alert-error />
                    <x-alert-success />

                    <form action="{{ route('auth.cadastrar') }}" method="POST">
                        @csrf

                        <div class="card-header">
                            <h5>Cadastro</h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-start">
                                <div class="col-6">
                                    <label for="username" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                                </div>
                                <div class="col-6">
                                    <label for="username" class="form-label">Sobrenome:</label>
                                    <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" required>
                                </div>
                            </div>
                            <div class="text-start mt-3">
                                <label for="username" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                            </div>
                            <div class="text-start mt-3">
                                <label for="username" class="form-label">Senha:</label>
                                <input type="password" class="form-control" placeholder="Senha" name="password" required>
                            </div>
                            <div class="text-start mt-3">
                                <label for="username" class="form-label">Confirmação de senha:</label>
                                <input type="password" class="form-control" placeholder="Senha" name="password-confirm" required>
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                <button class="btn btn-primary" type="submit">Salvar</button>
                                <p><a class="link-opacity-75" href="{{ route('auth.login') }}">Entrar</a></p>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</body>

</html>
