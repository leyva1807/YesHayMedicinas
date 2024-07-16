<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id Identificador de la moneda
 * @property string $nombre
 * @property string $codigo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\monedaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|moneda newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|moneda newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|moneda query()
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereCodigo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class moneda extends Model
{
    use HasFactory;
}
