<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'id' => 1,
            'specialty_id' => 3,
            'name' => 'Gurah Mesin'
        ]);

        Service::create([
            'id' => 2,
            'specialty_id' => 3,
            'name' => 'Tune Up'
        ]);

        Service::create([
            'id' => 3,
            'specialty_id' => 3,
            'name' => 'Cek Rem'
        ]);

        Service::create([
            'id' => 4,
            'specialty_id' => 3,
            'name' => 'Ganti Oli'
        ]);

        Service::create([
            'id' => 5,
            'specialty_id' => 1,
            'name' => 'Service AC Berkala'
        ]);
    }
}
