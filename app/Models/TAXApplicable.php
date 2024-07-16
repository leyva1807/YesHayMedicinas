<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $tax_applicable
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable query()
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable whereTaxApplicable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TAXApplicable extends Model
{
    use HasFactory;
}
