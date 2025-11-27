
<h1>Tipos de Producto</h1>

<a href="{{ route('tipos.create') }}">Crear tipo</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>

    @foreach($tipos as $tipo)
    <tr>
        <td>{{ $tipo->id }}</td>
        <td>{{ $tipo->nombre }}</td>
        <td>
            <a href="{{ route('tipos.edit', $tipo) }}">Editar</a>

            <form action="{{ route('tipos.destroy', $tipo) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
