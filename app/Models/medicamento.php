<?php

namespace App\Models;

use App\Models\unidade_medida;
use App\Models\marca; 
use App\Models\StatusProducto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriaMedicamento;

class Medicamento extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'medicamentos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'unidad_medida_id',
        'categoria_id',
        'descripcion',
        'marca_id',
        'status_product_id',
        'imagen',
        'stock',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'unsignedBigInteger';

    /**
     * Get the unidad_medida that owns the medicamento.
     */
    public function unidadMedida()
    {
        return $this->belongsTo(unidade_medida::class, 'unidad_medida_id');
    }

    /**
     * Get the categoria that owns the medicamento.
     */
    public function categoria()
    {
        return $this->belongsTo(CategoriaMedicamento::class, 'categoria_id');
    }

    /**
     * Get the marca that owns the medicamento.
     */
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    /**
     * Get the status_product that owns the medicamento.
     */
    public function statusProduct()
    {
        return $this->belongsTo(StatusProduct::class, 'status_product_id');
    }
}