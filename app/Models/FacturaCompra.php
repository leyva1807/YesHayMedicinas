<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FacturaCompra
 *
 * @property $id
 * @property $numero_factura
 * @property $fecha_factura
 * @property $envio_id
 * @property $total_factura
 * @property $proveedor
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleFactura[] $detalleFacturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FacturaCompra extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['numero_factura', 'fecha_factura', 'envio_id', 'total_factura', 'proveedor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleFacturas()
    {
        return $this->hasMany(\App\Models\DetalleFactura::class, 'id', 'factura_compra_id');
    }
    
}
