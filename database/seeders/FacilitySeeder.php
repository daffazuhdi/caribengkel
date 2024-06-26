<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facility::create([
            'id' => 1,
            'name' => 'Toilet'
        ]);

        Facility::create([
            'id' => 2,
            'name' => 'Ruang Tunggu Ber-AC'
        ]);

        Facility::create([
            'id' => 3,
            'name' => 'Mushola'
        ]);

        Facility::create([
            'id' => 4,
            'name' => 'Kantin'
        ]);

        Facility::create([
            'id' => 5,
            'name' => 'Kursi Pijat'
        ]);

        Facility::create([
            'id' => 6,
            'name' => 'Meja Biliard'
        ]);
    }
}
