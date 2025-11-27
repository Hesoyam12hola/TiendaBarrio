<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        $tipos = TipoProducto::all();
        return view('tipoproductos.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipoproductos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        TipoProducto::create($request->all());
        return redirect()->route('tipoproductos.index')->with('success', 'Tipo creado');
    }

    public function edit(TipoProducto $tipoproducto)
    {
        return view('tipoproductos.edit', compact('tipoproducto'));
    }

    public function update(Request $request, TipoProducto $tipoproducto)
    {
        $tipoproducto->update($request->all());
        return redirect()->route('tipoproductos.index')->with('success', 'Actualizado');
    }

    public function destroy(TipoProducto $tipoproducto)
    {
        $tipoproducto->delete();
        return redirect()->route('tipoproductos.index')->with('success', 'Eliminado');
    }
}
