<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MoneyDonation
 *
 * @property int $id
 * @property int $giver_id
 * @property string|null $amount
 * @property string $creation_date
 * @property string $creation_time
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDonation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDonation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDonation query()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDonation whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDonation whereCreationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDonation whereCreationTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDonation whereGiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MoneyDonation whereId($value)
 * @mixin \Eloquent
 */
class MoneyDonation extends Model
{
    use HasFactory;

    public $table = 'money_donations';
    public $guarded= [];
    public $timestamps = false;
}
