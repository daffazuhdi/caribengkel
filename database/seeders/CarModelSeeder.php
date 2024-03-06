<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CarModel::create([
            'id' => 1,
            'car_brand_id' => 1,
            'name' => 'Raize'
        ]);
        CarModel::create([
            'id' => 2,
            'car_brand_id' => 1,
            'name' => 'Innova'
        ]);
        CarModel::create([
            'id' => 3,
            'car_brand_id' => 2,
            'name' => 'Brio'
        ]);
        CarModel::create([
            'id' => 4,
            'car_brand_id' => 3,
            'name' => 'M4'
        ]);
    }
}
