<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ItemDistribution
 *
 * @property int $id
 * @property int $institution_id
 * @property int $item_id
 * @property int|null $quantity
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDistribution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDistribution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDistribution query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDistribution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDistribution whereInstitutionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDistribution whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDistribution whereQuantity($value)
 * @mixin \Eloquent
 */
class ItemDistribution extends Model
{
    use HasFactory;

    public $table = 'item_distributions';
    public $guarded = [];
    public $timestamps = false;
}
