<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        $tipos = TipoProducto::all();
        return view('tipos.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        TipoProducto::create($request->only('nombre'));

        return redirect()->route('tipos.index')->with('success', 'Tipo creado correctamente.');
    }


        public function edit($id)
    {
        $tipo_producto = TipoProducto::findOrFail($id);

        return view('tipos.edit', compact('tipo_producto'));
    }

    public function update(Request $request, $id)
    {
        $tipo = TipoProducto::findOrFail($id);

        $tipo->update([
            'nombre' => $request->nombre
        ]);

        return redirect()->route('tipos.index')->with('success', 'Actualizado correctamente.');
    }



        public function destroy($id)
    {
        $tipo = TipoProducto::findOrFail($id);
        $tipo->delete();

        return redirect()->route('tipos.index')->with('success', 'Eliminado correctamente.');
    }


    public function show($id)
{
    $tipo_producto = TipoProducto::findOrFail($id);
    return view('tipos.show', compact('tipo_producto'));
}

}
