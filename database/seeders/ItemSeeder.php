<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create
        ([
            'name' =>'ارز',
            'quantity' =>500,
        ]);

        Item::create
        ([
            'name' =>'مكرونة',
            'quantity' =>200,
        ]);

        Item::create
        ([
            'name' =>'شاي',
            'quantity' =>1000,
        ]);
    }
}
