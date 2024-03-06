<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subdistrict;

class SubdistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subdistrict::create([
            'id' => 1,
            'name' => 'Serpong'
        ]);

        Subdistrict::create([
            'id' => 2,
            'name' => 'Serpong Utara'
        ]);

        Subdistrict::create([
            'id' => 3,
            'name' => 'Ciputat'
        ]);

        Subdistrict::create([
            'id' => 4,
            'name' => 'Ciputat Timur'
        ]);

        Subdistrict::create([
            'id' => 5,
            'name' => 'Pamulang'
        ]);

        Subdistrict::create([
            'id' => 6,
            'name' => 'Pondok Aren'
        ]);

        Subdistrict::create([
            'id' => 7,
            'name' => 'Setu'
        ]);
    }
}
