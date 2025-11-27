<h1>Productos</h1>

<a href="{{ route('productos.create') }}">Crear producto</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Tipo</th>
        <th>Acciones</th>
    </tr>

    @foreach($productos as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nombre }}</td>
        <td>{{ $p->precio }}</td>
        <td>{{ $p->tipo->nombre }}</td>

        <td>
            <a href="{{ route('productos.edit', $p) }}">Editar</a>

            <form action="{{ route('productos.destroy', $p) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
