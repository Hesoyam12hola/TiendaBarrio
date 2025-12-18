@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header d-flex justify-content-between">
        <h4>Productos</h4>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo Producto</a>
    </div>

    <div class="card-body">
      <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion ?? '—' }}</td>
                <td>{{ $producto->tipo->nombre ?? '—' }}</td>

                <td>
                    <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info btn-sm">Mostrar</a>
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

    </div>
</div>

@endsection
