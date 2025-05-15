<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Institution
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @method static \Illuminate\Database\Eloquent\Builder|Institution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institution query()
 * @method static \Illuminate\Database\Eloquent\Builder|Institution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institution whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institution whereName($value)
 * @mixin \Eloquent
 */
class Institution extends Model
{
    use HasFactory;

    public $table = 'institutions';
    public $guarded = [];
    public $timestamps = false;


}
