<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GiverSeeder::class);
        $this->call(InstitutionSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(ItemDonationSeeder::class);
        $this->call(MoneyDonationSeeder::class);
    }
}
