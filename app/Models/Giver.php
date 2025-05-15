<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Giver
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @method static \Database\Factories\GiverFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Giver newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Giver newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Giver query()
 * @method static \Illuminate\Database\Eloquent\Builder|Giver whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Giver whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Giver whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Giver wherePhone($value)
 * @mixin \Eloquent
 */

class Giver extends Model
{
    use HasFactory;

    public $table = 'givers';
    public $guarded = [];
    public $timestamps = false;
}
