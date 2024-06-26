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
        CarBrand::create([
            'id' => 9,
            'origin_id' => 1,
            'name' => 'Suzuki',
            'label' => 'suzuki'
        ]);
        CarBrand::create([
            'id' => 10,
            'origin_id' => 2,
            'name' => 'Wuling',
            'label' => 'wuling'
        ]);
        CarBrand::create([
            'id' => 11,
            'origin_id' => 2,
            'name' => 'Chevrolet',
            'label' => 'chevrolet'
        ]);
        CarBrand::create([
            'id' => 12,
            'origin_id' => 1,
            'name' => 'Subaru',
            'label' => 'subaru'
        ]);
        CarBrand::create([
            'id' => 13,
            'origin_id' => 1,
            'name' => 'Mazda',
            'label' => 'mazda'
        ]);
        CarBrand::create([
            'id' => 14,
            'origin_id' => 1,
            'name' => 'Lexus',
            'label' => 'lexus'
        ]);
        CarBrand::create([
            'id' => 15,
            'origin_id' => 1,
            'name' => 'Nissan',
            'label' => 'nissan'
        ]);
        CarBrand::create([
            'id' => 16,
            'origin_id' => 2,
            'name' => 'Mercedes Benz',
            'label' => 'merc'
        ]);
    }
}
