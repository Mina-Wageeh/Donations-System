<?php

namespace Database\Seeders;

use App\Models\MoneyDonation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoneyDonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MoneyDonation::create
        ([
            'giver_id' =>2,
            'amount' =>5000,
        ]);

        MoneyDonation::create
        ([
            'giver_id' =>4,
            'amount' =>2000,
        ]);
    }
}
