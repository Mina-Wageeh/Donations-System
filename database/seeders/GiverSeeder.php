<?php

namespace Database\Seeders;

use App\Models\Giver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Giver::create
        ([
            'name' =>'ابانوب متياس',
            'address' =>'سمالوط',
            'phone' =>'01285469852'
        ]);

        Giver::create
        ([
            'name' =>'مينا وجيه',
            'address' =>'مطاي',
            'phone' =>'01585469667'
        ]);

        Giver::create
        ([
            'name' =>'امير عطا',
            'address' =>'بني مزار',
            'phone' =>'01185469568'
        ]);

        Giver::create
        ([
            'name' =>'يوسف فوزي',
            'address' =>'البيهو',
            'phone' =>'01012589745'
        ]);
    }
}
