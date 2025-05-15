<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MoneyDistribution
 *
 * @property int $id
 * @property int $institution_id
 * @property string|null $amount
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDistribution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDistribution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDistribution query()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDistribution whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDistribution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDistribution whereInstitutionId($value)
 * @mixin \Eloquent
 */
class MoneyDistribution extends Model
{
    use HasFactory;

    public $table = 'money_distributions';
    public $timestamps = false;
    public $guarded = [];
}
