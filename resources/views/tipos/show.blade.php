@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h4>Detalles del Tipo de Producto</h4>
    </div>

    <div class="card-body">
        <p><strong>ID:</strong> {{ $tipo_producto->id }}</p>
        <p><strong>Nombre:</strong> {{ $tipo_producto->nombre }}</p>

        <a href="{{ route('tipos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>

@endsection
