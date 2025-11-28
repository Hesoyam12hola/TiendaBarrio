@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header d-flex justify-content-between">
        <h4>Usuarios</h4>
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Nuevo Usuario</a>
    </div>

    <div class="card-body">

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($usuarios as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>

                    <td>
                        <a href="{{ route('usuarios.edit', $u->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('usuarios.destroy', $u->id) }}"
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
