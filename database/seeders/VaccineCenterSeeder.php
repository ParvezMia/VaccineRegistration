<?php

namespace Database\Seeders;

use App\Models\VaccineCenter;
use Illuminate\Database\Seeder;

class VaccineCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        VaccineCenter::create(['name' => 'Center A', 'daily_limit' => 100, 'original_limit' => 100]);
        VaccineCenter::create(['name' => 'Center B', 'daily_limit' => 50 , 'original_limit' => 50]);
    }

}
