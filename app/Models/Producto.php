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
        'precio',
        'stock',
        'tipo_producto_id'
    ];

    public function tipoProducto()
    {
        return $this->belongsTo(TipoProducto::class);
    }
}
