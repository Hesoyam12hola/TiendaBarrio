@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header"><h4>Crear Producto</h4></div>

    <div class="card-body">

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" name="precio" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tipo de Producto</label>
                <select name="tipo_producto_id" class="form-control" required>
                    @foreach($tipos as $t)
                        <option value="{{ $t->id }}">{{ $t->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Guardar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</div>

@endsection
