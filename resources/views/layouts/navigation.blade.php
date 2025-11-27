<nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>

    <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav"
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/prueba') }}">Prueba</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            @if(Auth::check())
                <li class="nav-item">
                    <span class="nav-link">Hola, {{ Auth::user()->name }}</span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-outline-danger btn-sm" type="submit">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary btn-sm" href="{{ route('register') }}">Registrarse</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
