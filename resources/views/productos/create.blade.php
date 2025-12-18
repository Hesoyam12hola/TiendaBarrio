@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h4>Nuevo Producto</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>

            <div class="form-group mb-3">
            <label for="precio">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
            </div>


            <div class="mb-3">
                <label>Tipo de Producto</label>
                <select name="tipo_producto_id" class="form-control" required>
                    <option value="">Seleccione...</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Guardar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>

@endsection
