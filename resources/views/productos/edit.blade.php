@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h4>Editar Producto</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('productos.update', $producto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
            </div>

            <div class="mb-3">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label>Precio</label>
                <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}" required>
            </div>

            <div class="mb-3">
                <label>Tipo de Producto</label>
                <select name="tipo_producto_id" class="form-control" required>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}" 
                            @if($tipo->id == $producto->tipo_producto_id) selected @endif>
                            {{ $tipo->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Actualizar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>

@endsection
