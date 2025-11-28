@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h4>Editar Usuario</h4>
    </div>

    <div class="card-body">

        <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" value="{{ $usuario->name }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" name="email" value="{{ $usuario->email }}" class="form-control" required>
            </div>

            <button class="btn btn-primary">Actualizar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>

        </form>

    </div>
</div>

@endsection
