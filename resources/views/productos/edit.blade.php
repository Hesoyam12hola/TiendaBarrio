<h1>Editar Producto</h1>

<form action="{{ route('productos.update', $producto) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}">

    <label>Precio:</label>
    <input type="number" name="precio" value="{{ $producto->precio }}">

    <label>Tipo:</label>
    <select name="tipo_producto_id">
        @foreach($tipos as $t)
        <option value="{{ $t->id }}" {{ $producto->tipo_producto_id == $t->id ? 'selected' : '' }}>
            {{ $t->nombre }}
        </option>
        @endforeach
    </select>

    <button>Actualizar</button>
</form>
