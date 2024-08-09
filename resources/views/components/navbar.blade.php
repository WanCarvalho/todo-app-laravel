<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand">TODO List</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>

            <div class="d-flex align-items-center justify-items-center">
                <h4 class="me-3 m-auto">
                    <span class="badge text-bg-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                        {{ auth()->user()->name }}
                        {{ auth()->user()->sobrenome }}</span>
                </h4>
                <a class="btn btn-outline-secondary" href="{{ route('auth.logout') }}">Sair</a>
            </div>
        </div>
    </div>
</nav>
