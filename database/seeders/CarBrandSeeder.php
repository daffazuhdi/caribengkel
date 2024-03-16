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
            'name' => 'Toyota',
            'label' => 'toyota'
        ]);
        CarBrand::create([
            'id' => 2,
            'origin_id' => 1,
            'name' => 'Honda',
            'label' => 'honda'
        ]);
        CarBrand::create([
            'id' => 3,
            'origin_id' => 2,
            'name' => 'BMW',
            'label' => 'bmw'
        ]);
        CarBrand::create([
            'id' => 4,
            'origin_id' => 2,
            'name' => 'Renault',
            'label' => 'renault'
        ]);
        CarBrand::create([
            'id' => 5,
            'origin_id' => 1,
            'name' => 'Mitsubishi',
            'label' => 'mitsubishi'
        ]);
        CarBrand::create([
            'id' => 6,
            'origin_id' => 2,
            'name' => 'Daihatsu',
            'label' => 'daihatsu'
        ]);
        CarBrand::create([
            'id' => 7,
            'origin_id' => 3,
            'name' => 'Hyundai',
            'label' => 'hyundai'
        ]);
        CarBrand::create([
            'id' => 8,
            'origin_id' => 3,
            'name' => 'KIA',
            'label' => 'kia'
        ]);
    }
}
