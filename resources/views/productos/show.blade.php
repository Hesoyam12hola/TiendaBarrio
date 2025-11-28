@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h4>Detalles del Producto</h4>
    </div>

    <div class="card-body">
        <p><strong>ID:</strong> {{ $producto->id }}</p>
        <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
        <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
        <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
        <p><strong>Tipo de Producto:</strong> {{ $producto->tipoProducto->nombre ?? '—' }}</p>

        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>

@endsection
