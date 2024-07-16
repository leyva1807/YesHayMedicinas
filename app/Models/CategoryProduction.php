<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $category_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CategoryProduction extends Model
{
    use HasFactory;
}
