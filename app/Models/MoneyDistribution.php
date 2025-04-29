<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyDistribution extends Model
{
    use HasFactory;

    public $table = 'money_distributions';
    public $timestamps = false;
    public $guarded = [];
}
