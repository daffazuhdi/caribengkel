<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Specialty;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialty::create([
            'id' => 1,
            'name' => 'AC'
        ]);

        Specialty::create([
            'id' => 2,
            'name' => 'Servis Kaki-kaki'
        ]);

        Specialty::create([
            'id' => 3,
            'name' => 'Oli & Mesin'
        ]);

        Specialty::create([
            'id' => 4,
            'name' => 'Lampu'
        ]);

        Specialty::create([
            'id' => 5,
            'name' => 'Ban'
        ]);

        Specialty::create([
            'id' => 6,
            'name' => 'Body & Cat'
        ]);

        Specialty::create([
            'id' => 7,
            'name' => 'Jok Kulit & Interior'
        ]);
    }
}
