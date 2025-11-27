<h1>Crear Tipo</h1>

<form action="{{ route('tipos.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre">

    <button>Guardar</button>
</form>
