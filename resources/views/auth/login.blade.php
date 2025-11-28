@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow">
            <div class="card-header text-center">
                <h4>Iniciar Sesión</h4>
            </div>

            <div class="card-body">

                @if(session('status'))
                    <div class="alert alert-info">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" name="email" class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button class="btn btn-primary w-100">Entrar</button>

                    <div class="text-center mt-3">
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                        <br>
                        <a href="{{ route('register') }}">Crear cuenta nueva</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
