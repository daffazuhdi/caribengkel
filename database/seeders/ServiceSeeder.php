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
            'name' => 'Ganti Oli'
        ]);

        Service::create([
            'id' => 4,
            'specialty_id' => 1,
            'name' => 'Service AC Berkala'
        ]);

        Service::create([
            'id' => 5,
            'specialty_id' => 5,
            'name' => 'Bongkar Pasang Ban'
        ]);

        Service::create([
            'id' => 6,
            'specialty_id' => 2,
            'name' => 'Jasa Cek Kerusakan Kaki-Kaki'
        ]);

        Service::create([
            'id' => 7,
            'specialty_id' => 2,
            'name' => 'Repair Bushing (Tie rod, Link stabilizer, dll)'
        ]);

        Service::create([
            'id' => 8,
            'specialty_id' => 2,
            'name' => 'Jasa Penggantian Shock Breaker'
        ]);

        Service::create([
            'id' => 9,
            'specialty_id' => 2,
            'name' => 'Service Steering Rack'
        ]);

        Service::create([
            'id' => 10,
            'specialty_id' => 2,
            'name' => 'Pembersihan Bagian Pengereman'
        ]);

        Service::create([
            'id' => 11,
            'specialty_id' => 4,
            'name' => 'Nano Burn Coating (Menghilangkan Mika Headlamp yang kekuningan)'
        ]);

        Service::create([
            'id' => 12,
            'specialty_id' => 4,
            'name' => 'Penggantian Bohlam Headlamp'
        ]);

        Service::create([
            'id' => 13,
            'specialty_id' => 4,
            'name' => 'Penggantian Bohlam Rem, Sein, dll'
        ]);

        Service::create([
            'id' => 14,
            'specialty_id' => 5,
            'name' => 'Spooring'
        ]);

        Service::create([
            'id' => 15,
            'specialty_id' => 5,
            'name' => 'Balancing'
        ]);

        Service::create([
            'id' => 16,
            'specialty_id' => 5,
            'name' => 'Tambal Ban'
        ]);

        Service::create([
            'id' => 17,
            'specialty_id' => 5,
            'name' => 'Tambal Ban TipTop'
        ]);

        Service::create([
            'id' => 18,
            'specialty_id' => 6,
            'name' => 'Cat & Repair per Panel (Pintu, Bumper, dll)'
        ]);

        Service::create([
            'id' => 19,
            'specialty_id' => 6,
            'name' => 'PDR (Paintless Dent Removal)'
        ]);

        Service::create([
            'id' => 20,
            'specialty_id' => 7,
            'name' => 'Interior Detailing'
        ]);

        Service::create([
            'id' => 21,
            'specialty_id' => 7,
            'name' => 'Retrim Jok Kulit 2 Baris Mulai Dari'
        ]);

        Service::create([
            'id' => 22,
            'specialty_id' => 7,
            'name' => 'Retrim Jok Kulit 3 Baris Mulai Dari'
        ]);

        Service::create([
            'id' => 23,
            'specialty_id' => 7,
            'name' => 'Cover Jok Kulit 2 Baris Mulai Dari'
        ]);

        Service::create([
            'id' => 24,
            'specialty_id' => 7,
            'name' => 'Cover Jok Kulit 3 Baris Mulai Dari'
        ]);

        Service::create([
            'id' => 25,
            'specialty_id' => 1,
            'name' => 'Penambahan Freon AC'
        ]);

        Service::create([
            'id' => 26,
            'specialty_id' => 1,
            'name' => 'Penggantian Filter AC'
        ]);


    }
}
