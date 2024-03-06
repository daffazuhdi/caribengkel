<?php

namespace Database\Seeders;

use App\Models\CarUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CarUser::create([
            'id' => 1,
            'user_id' => '1',
            'car_id' => '3',
        ]);
        CarUser::create([
            'id' => 2,
            'user_id' => '1',
            'car_id' => '2',
        ]);
        CarUser::create([
            'id' => 3,
            'user_id' => '2',
            'car_id' => '1',
        ]);
    }
}
