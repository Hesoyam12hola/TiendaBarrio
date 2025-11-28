@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header"><h4>Editar Tipo de Producto</h4></div>

    <div class="card-body">

        <form action="{{ route('tipos-producto.update', $tipo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre del tipo</label>
                <input type="text" name="nombre" value="{{ $tipo->nombre }}" class="form-control" required>
            </div>

            <button class="btn btn-primary">Actualizar</button>
            <a href="{{ route('tipos-producto.index') }}" class="btn btn-secondary">Volver</a>

        </form>

    </div>
</div>

@endsection
