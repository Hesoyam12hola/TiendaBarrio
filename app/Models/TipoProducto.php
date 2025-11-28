<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Producto; // ← IMPORTANTE

class TipoProducto extends Model
{
    protected $table = 'tipo_productos';

    protected $fillable = ['nombre'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'tipo_producto_id');
    }
}
