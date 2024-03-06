<?php

namespace Database\Seeders;

use App\Models\CarBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CarBrand::create([
            'id' => 1,
            'origin_id' => 1,
            'name' => 'Toyota'
        ]);
        CarBrand::create([
            'id' => 2,
            'origin_id' => 1,
            'name' => 'Honda'
        ]);
        CarBrand::create([
            'id' => 3,
            'origin_id' => 2,
            'name' => 'BMW'
        ]);
    }
}
