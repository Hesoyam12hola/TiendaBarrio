@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h4>Crear Usuario</h4>
    </div>

    <div class="card-body">

        <form method="POST" action="{{ route('usuarios.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary">Guardar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>

        </form>

    </div>
</div>

@endsection
