<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $visibility
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility whereVisibility($value)
 * @mixin \Eloquent
 */
class Visibility extends Model
{
    use HasFactory;
}
