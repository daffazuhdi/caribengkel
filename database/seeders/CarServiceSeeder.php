<?php

namespace Database\Seeders;

use App\Models\CarService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CarServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarService::create([
            'id' => 1,
            'car_id' => 1,
            'service_date' => Carbon::now()->add(-180, 'day')->format('Y-m-d H:i:s')
        ]);

        CarService::create([
            'id' => 2,
            'car_id' => 1,
            'service_date' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        CarService::create([
            'id' => 3,
            'car_id' => 2,
            'service_date' => Carbon::now()->add(-350, 'day')->format('Y-m-d H:i:s')
        ]);

        CarService::create([
            'id' => 4,
            'car_id' => 2,
            'service_date' => Carbon::now()->add(170, 'day')->format('Y-m-d H:i:s')
        ]);
    }
}
