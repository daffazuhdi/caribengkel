<?php

namespace Database\Seeders;

use App\Models\SpecialtyWorkshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtyWorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpecialtyWorkshop::create([
            'specialty_id' => 3,
            'workshop_id' => 1
        ]);

        SpecialtyWorkshop::create([
            'specialty_id' => 5,
            'workshop_id' => 1
        ]);

        SpecialtyWorkshop::create([
            'specialty_id' => 1,
            'workshop_id' => 2
        ]);
    }
}
