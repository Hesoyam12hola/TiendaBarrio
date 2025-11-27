<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('tipo')->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $tipos = TipoProducto::all();
        return view('productos.create', compact('tipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'tipo_producto_id' => 'required'
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto creado');
    }

    public function edit(Producto $producto)
    {
        $tipos = TipoProducto::all();
        return view('productos.edit', compact('producto','tipos'));
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado');
    }
}
