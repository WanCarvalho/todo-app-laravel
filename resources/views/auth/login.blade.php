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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50" height="100vh">
    <div class="container-fluid">

        <div class="row w-100">
            <div class="d-flex justify-content-center align-items-center mt-5">

                <div class="card text-center w-50 p-5">

                    <x-alert-error />
                    <x-alert-success />

                    <form action="{{ route('auth.entrar') }}" method="POST">
                        @csrf

                        <div class="card-header mt-4">
                            <h5>LOGIN</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="name@example.com" value="{{ old('email') }}">
                                <label for="floatingInput">E-mail</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="password"
                                    placeholder="Password" value="{{ old('password') }}">
                                <label for="floatingPassword">Senha</label>
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                <button class="btn btn-primary" type="submit">Entrar</button>
                                <p><a class="link-opacity-75" href="{{ route('auth.cadastro') }}">Cadastre-se</a></p>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</body>

</html>
