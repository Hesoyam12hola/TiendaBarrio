<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function tipo()
{
    return $this->belongsTo(TipoProducto::class, 'tipo_producto_id');
}

}
