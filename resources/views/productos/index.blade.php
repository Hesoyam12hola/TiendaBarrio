@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Productos</h4>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo Producto</a>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($productos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>${{ number_format($p->precio, 0, ',', '.') }}</td>
                    <td>{{ $p->tipo->nombre }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $p->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('productos.destroy', $p->id) }}" 
                              method="POST" 
                              class="d-inline">
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
