<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name', 'TiendaBarrio') }}</title>

    <!-- Bootstrap CSS (CDN como respaldo) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">

    <!-- Vite: tu CSS/JS compilados (incluye bootstrap si lo importaste en resources) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    <!-- NAV (usa el archivo navigation.blade.php que ya creamos) -->
    @include('layouts.navigation')

    <!-- Main container -->
    <div class="container py-4">

        <!-- Mensajes de sesión (éxito / error) -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        <!-- Aquí van las vistas (contenido) -->
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Footer simple -->
    <footer class="bg-white border-top mt-auto">
        <div class="container py-3 text-center">
            <small class="text-muted">© {{ date('Y') }} {{ config('app.name', 'TiendaBarrio') }} - Todos los derechos reservados</small>
        </div>
    </footer>

    <!-- Bootstrap JS (CDN fallback) — solo si quieres que funcione aunque no uses vite en dev) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous"></script>

    <!-- Vite ya cargó resources/js/app.js arriba; puedes dejar esta línea para scripts adicionales -->
    @stack('scripts')
</body>
</html>
