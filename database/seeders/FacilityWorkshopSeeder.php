<?php

namespace Database\Seeders;

use App\Models\FacilityWorkshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilityWorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FacilityWorkshop::create([
            // 'id' => 1,
            'workshop_id' => '1',
            'facility_id' => '1',
        ]);
        FacilityWorkshop::create([
            // 'id' => 1,
            'workshop_id' => '1',
            'facility_id' => '2',
        ]);
        FacilityWorkshop::create([
            // 'id' => 1,
            'workshop_id' => '1',
            'facility_id' => '3',
        ]);
        FacilityWorkshop::create([
            // 'id' => 2,
            'workshop_id' => '2',
            'facility_id' => '1',
        ]);
        FacilityWorkshop::create([
            // 'id' => 2,
            'workshop_id' => '2',
            'facility_id' => '2',
        ]);
    }
}
