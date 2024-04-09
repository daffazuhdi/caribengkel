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
        CarModel::create([
            'id' => 5,
            'car_brand_id' => 3,
            'name' => 'E36'
        ]);
        CarModel::create([
            'id' => 6,
            'car_brand_id' => 2,
            'name' => 'Civic'
        ]);
        CarModel::create([
            'id' => 7,
            'car_brand_id' => 2,
            'name' => 'HRV'
        ]);
        CarModel::create([
            'id' => 8,
            'car_brand_id' => 2,
            'name' => 'CRV'
        ]);
        CarModel::create([
            'id' => 9,
            'car_brand_id' => 4,
            'name' => 'Triber'
        ]);
        CarModel::create([
            'id' => 10,
            'car_brand_id' => 4,
            'name' => 'Kwid'
        ]);
        CarModel::create([
            'id' => 11,
            'car_brand_id' => 4,
            'name' => 'Kiger'
        ]);
        CarModel::create([
            'id' => 12,
            'car_brand_id' => 4,
            'name' => 'Duster'
        ]);
        CarModel::create([
            'id' => 13,
            'car_brand_id' => 5,
            'name' => 'ASX'
        ]);
        CarModel::create([
            'id' => 14,
            'car_brand_id' => 5,
            'name' => 'Mirage'
        ]);
        CarModel::create([
            'id' => 15,
            'car_brand_id' => 5,
            'name' => 'Xpander'
        ]);
        CarModel::create([
            'id' => 16,
            'car_brand_id' => 6,
            'name' => 'Terios'
        ]);
        CarModel::create([
            'id' => 17,
            'car_brand_id' => 6,
            'name' => 'Feroza'
        ]);
        CarModel::create([
            'id' => 18,
            'car_brand_id' => 6,
            'name' => 'Sigra'
        ]);
        CarModel::create([
            'id' => 19,
            'car_brand_id' => 7,
            'name' => 'Stargazer'
        ]);
        CarModel::create([
            'id' => 20,
            'car_brand_id' => 7,
            'name' => 'Creta'
        ]);
        CarModel::create([
            'id' => 21,
            'car_brand_id' => 7,
            'name' => 'Palisade'
        ]);
        CarModel::create([
            'id' => 22,
            'car_brand_id' => 8,
            'name' => 'Picanto'
        ]);
        CarModel::create([
            'id' => 23,
            'car_brand_id' => 8,
            'name' => 'Stonic'
        ]);
        CarModel::create([
            'id' => 24,
            'car_brand_id' => 8,
            'name' => 'Sportage'
        ]);
        CarModel::create([
            'id' => 25,
            'car_brand_id' => 9,
            'name' => 'Fronx'
        ]);
        CarModel::create([
            'id' => 26,
            'car_brand_id' => 9,
            'name' => 'Baleno'
        ]);
        CarModel::create([
            'id' => 27,
            'car_brand_id' => 9,
            'name' => 'Ignis'
        ]);
    }
}
