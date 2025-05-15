<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ItemDonation
 *
 * @property int $id
 * @property int $giver_id
 * @property int $item_id
 * @property int|null $quantity
 * @property string $creation_date
 * @property string $creation_time
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDonation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDonation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDonation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDonation whereCreationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDonation whereCreationTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDonation whereGiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDonation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDonation whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemDonation whereQuantity($value)
 * @mixin \Eloquent
 */
class ItemDonation extends Model
{
    use HasFactory;

    public $table = 'item_donations';
    public $guarded= [];
    public $timestamps = false;
}
