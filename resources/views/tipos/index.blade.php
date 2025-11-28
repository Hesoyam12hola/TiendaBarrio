@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h4 class="m-0">Lista de Tipos de Producto</h4>
            <a href="{{ route('tipos.create') }}" class="btn btn-primary">Crear Tipo</a>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tipos as $tipo)
                    <tr>
                        <td>{{ $tipo->id }}</td>
                        <td>{{ $tipo->nombre }}</td>
                        <td>

                            <!-- BOTÓN VER (SHOW) -->
                            <a href="{{ route('tipos.show', $tipo->id) }}" 
                               class="btn btn-info">
                                Ver
                            </a>

                            <!-- BOTÓN EDITAR (MODAL) -->
                            <button 
                                class="btn btn-warning btn-editar"
                                data-id="{{ $tipo->id }}"
                                data-nombre="{{ $tipo->nombre }}"
                                data-bs-toggle="modal"
                                data-bs-target="#modalEditar">
                                Editar
                            </button>

                            <!-- BOTÓN ELIMINAR -->
                            <button 
                                class="btn btn-danger btn-eliminar"
                                data-id="{{ $tipo->id }}">
                                Eliminar
                            </button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Editar Tipo de Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form id="formEditar" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nombre del tipo</label>
                        <input type="text" name="nombre" id="edit_nombre" class="form-control" required>
                    </div>

                    <button class="btn btn-primary">Guardar Cambios</button>
                </form>

            </div>

        </div>
    </div>
</div>

<form id="formEliminar" method="POST" style="display:none">
    @csrf
    @method('DELETE')
</form>

<script>
    document.querySelectorAll(".btn-editar").forEach(btn => {
        btn.addEventListener("click", function() {
            let id = this.getAttribute("data-id");
            let nombre = this.getAttribute("data-nombre");

            document.getElementById("formEditar").setAttribute("action", "/tipos-producto/" + id);
            document.getElementById("edit_nombre").value = nombre;
        });
    });

    document.querySelectorAll(".btn-eliminar").forEach(btn => {
        btn.addEventListener("click", function() {
            let id = this.getAttribute("data-id");

            if (confirm("¿Seguro que deseas eliminar este tipo?")) {
                let form = document.getElementById("formEliminar");
                form.setAttribute("action", "/tipos-producto/" + id);
                form.submit();
            }
        });
    });
</script>

@endsection
