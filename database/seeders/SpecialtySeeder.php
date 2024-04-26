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
            'name' => 'AC',
            'label' => 'ac',
            'logo' => 'ac.svg'
        ]);

        Specialty::create([
            'id' => 2,
            'name' => 'Servis Kaki-kaki',
            'label' => 'kakikaki',
            'logo' => 'kaki-kaki.svg'
        ]);

        Specialty::create([
            'id' => 3,
            'name' => 'Oli & Mesin',
            'label' => 'olimesin',
            'logo' => 'oli.svg'
        ]);

        Specialty::create([
            'id' => 4,
            'name' => 'Lampu',
            'label' => 'lampu',
            'logo' => 'lampu.svg'
        ]);

        Specialty::create([
            'id' => 5,
            'name' => 'Ban',
            'label' => 'ban',
            'logo' => 'ban.svg'
        ]);

        Specialty::create([
            'id' => 6,
            'name' => 'Body & Cat',
            'label' => 'bodycat',
            'logo' => 'body.svg'
        ]);

        Specialty::create([
            'id' => 7,
            'name' => 'Jok Kulit & Interior',
            'label' => 'jokinterior',
            'logo' => 'jok.svg'
        ]);
    }
}
