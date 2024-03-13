<?php

namespace Database\Seeders;

use App\Models\CarBrandWorkshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarBrandWorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CarBrandWorkshop::create([
            // 'id' => 1,
            'car_brand_id' => 1,
            'workshop_id' => 1
        ]);
        CarBrandWorkshop::create([
            // 'id' => 1,
            'car_brand_id' => 2,
            'workshop_id' => 1
        ]);
        CarBrandWorkshop::create([
            // 'id' => 1,
            'car_brand_id' => 1,
            'workshop_id' => 2
        ]);
        CarBrandWorkshop::create([
            // 'id' => 1,
            'car_brand_id' => 3,
            'workshop_id' => 2
        ]);
    }
}
