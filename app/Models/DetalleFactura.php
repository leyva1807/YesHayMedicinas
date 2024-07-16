<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;

    protected $fillable = [
        'factura_compra_id',
        'medicamento_id',
        'categoria_medicamento_id',
        'cantidad',
        'precio_unitario',
        'precio_total',
        'imagen',
        'fecha_vencimiento',
    ];
}