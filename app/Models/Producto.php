<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'tipo_producto_id'
    ];

    // Relación con TipoProducto
    public function tipoProducto()
    {
        return $this->belongsTo(TipoProducto::class);
    }
}
