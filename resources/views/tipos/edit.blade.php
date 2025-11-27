<h1>Editar Tipo</h1>

<form action="{{ route('tipos.update', $tipo) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $tipo->nombre }}">

    <button>Actualizar</button>
</form>
