<?php

namespace Database\Seeders;

use App\Models\ItemDonation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemDonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemDonation::create
        ([
            'giver_id' =>3,
            'item_id' =>2,
            'quantity' =>50,
        ]);

        ItemDonation::create
        ([
            'giver_id' =>1,
            'item_id' =>3,
            'quantity' =>80,
        ]);

        ItemDonation::create
        ([
            'giver_id' =>2,
            'item_id' =>1,
            'quantity' =>140,
        ]);
    }
}
