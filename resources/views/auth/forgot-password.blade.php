@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">

        <div class="card shadow">
            <div class="card-header text-center">
                <h4>Restablecer Contraseña</h4>
            </div>

            <div class="card-body">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Correo registrado</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <button class="btn btn-primary w-100">Enviar enlace</button>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection
