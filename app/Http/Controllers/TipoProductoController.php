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
            'nombre' => 'required'
        ]);

        TipoProducto::create($request->all());

        return redirect()->route('tipos.index')->with('success', 'Tipo creado correctamente.');
    }

    public function edit(TipoProducto $tipo)
    {
        return view('tipos.edit', compact('tipo'));
    }

    public function update(Request $request, TipoProducto $tipo)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $tipo->update($request->all());

        return redirect()->route('tipos.index')->with('success', 'Tipo actualizado.');
    }

    public function destroy(TipoProducto $tipo)
    {
        $tipo->delete();
        return redirect()->route('tipos.index')->with('success', 'Tipo eliminado.');
    }
}
