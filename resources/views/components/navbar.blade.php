<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">TODO List</a>

        <div class="d-flex">
            <p>{{ auth()->user()->name }} {{ auth()->user()->sobrenome }}</p>
            <a class="btn btn-outline-success" href="{{ route('auth.logout') }}">Sair</a>
        </div>
    </div>
</nav>
