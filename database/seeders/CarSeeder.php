<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'id' => 1,
            'car_model_id' => '3',
            'license_plate' => 'B 411 ILA',
            // 'last_service_date' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        Car::create([
            'id' => 2,
            'car_model_id' => '3',
            'license_plate' => 'B 1904 NZA',
            // 'last_service_date' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        Car::create([
            'id' => 3,
            'car_model_id' => '1',
            'license_plate' => 'B 1904 NAL',
            // 'last_service_date' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        Car::create([
            'id' => 4,
            'car_model_id' => '4',
            'license_plate' => 'B 1904 BOY',
            // 'last_service_date' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
