<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 */

class Giver extends Model
{
    use HasFactory;

    public $table = 'givers';
    public $guarded = [];
    public $timestamps = false;
}
