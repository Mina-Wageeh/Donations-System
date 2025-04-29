<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyDonation extends Model
{
    use HasFactory;

    public $table = 'money_donations';
    public $guarded= [];
    public $timestamps = false;

    public function giver()
    {
        return $this->belongsTo(Giver::class);
    }
}
