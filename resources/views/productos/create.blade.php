<h1>Crear Producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre">

    <label>Precio:</label>
    <input type="number" name="precio">

    <label>Tipo:</label>
    <select name="tipo_producto_id">
        @foreach($tipos as $t)
        <option value="{{ $t->id }}">{{ $t->nombre }}</option>
        @endforeach
    </select>

    <button>Guardar</button>
</form>
