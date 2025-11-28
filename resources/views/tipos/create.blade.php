@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header"><h4>Crear Tipo de Producto</h4></div>

    <div class="card-body">

        <form action="{{ route('tipos-producto.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre del tipo</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <button class="btn btn-primary">Guardar</button>
            <a href="{{ route('tipos-producto.index') }}" class="btn btn-secondary">Volver</a>
        </form>

    </div>
</div>

@endsection
