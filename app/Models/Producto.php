<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre', 'precio', 'tipo_producto_id'];

    public function tipo()
    {
        return $this->belongsTo(TipoProducto::class, 'tipo_producto_id');
    }
}
