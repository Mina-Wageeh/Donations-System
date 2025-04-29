<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::create
        ([
            'name' =>'مارجرجس',
            'location' =>'سمالوط البلد',
        ]);

        Institution::create
        ([
            'name' =>'مارمرقص',
            'location' =>'سمالوط المعصرة',
        ]);

        Institution::create
        ([
            'name' =>'القديس موريس',
            'location' =>'ارض ابو سيدهم',
        ]);
    }
}
