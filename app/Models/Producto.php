<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'tipo_producto_id'
    ];

    public function tipo()
    {
        return $this->belongsTo(TipoProducto::class, 'tipo_producto_id');
    }
}
