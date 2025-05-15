<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Safe
 *
 * @property int $id
 * @property string $total
 * @method static \Illuminate\Database\Eloquent\Builder|Safe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Safe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Safe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Safe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Safe whereTotal($value)
 * @mixin \Eloquent
 */
class Safe extends Model
{
    use HasFactory;

    public $table = 'safes';
    public $guarded = [];
    public $timestamps = false;
}
