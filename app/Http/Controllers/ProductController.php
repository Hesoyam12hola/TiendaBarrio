<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
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
        'descripcion' => 'nullable',
        'precio' => 'required|numeric',
        'tipo_producto_id' => 'required|integer',
    ]);

    Producto::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'precio' => $request->precio,
        'tipo_producto_id' => $request->tipo_producto_id,
    ]);

    return redirect()->route('productos.index')->with('success', 'Producto creado');
}

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $tipos = TipoProducto::all();
        return view('productos.edit', compact('producto', 'tipos'));
    }

public function update(Request $request, $id)
{
    $productos = Producto::findOrFail($id);

    $productos->update([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        
        'tipo_producto_id' => $request->tipo_producto_id,
    ]);

    return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente');
}


    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect()->route('productos.index')->with('success', 'Producto eliminado');
    }
}
