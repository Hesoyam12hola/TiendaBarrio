@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Tipos de Producto</h4>
        <a href="{{ route('tipos-producto.create') }}" class="btn btn-primary">Nuevo Tipo</a>
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
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tipos as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->nombre }}</td>
                    <td>
                        <a href="{{ route('tipos-producto.edit', $t->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('tipos-producto.destroy', $t->id) }}" 
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
