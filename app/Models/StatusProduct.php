<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StatusProduct extends Model
{
    use HasFactory;
}
