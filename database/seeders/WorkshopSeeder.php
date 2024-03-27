<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Workshop;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workshop::create([
            'id' => 1,
            'subdistrict_id' => 1,
            'name' => 'Bengkel Mobil BOS BSD',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Kp., Cilenggang, Kec. Serpong, Kota Tangerang Selatan',
            'photo' => 'bengkel_bos_bsd.png',
            'operational_hour' => 'Senin s.d. Sabtu, 10:00 - 16:00',
            'phone_number' => '(021) 5380810',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 2,
            'subdistrict_id' => 4,
            'name' => 'Bengkel Servis AC Ciputat',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Kec. Ciputat',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Sabtu, 10:00 - 16:00',
            'phone_number' => '(021) 5380991',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 3,
            'subdistrict_id' => 2,
            'name' => 'BengkelIN BSD',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Kec. Serpong Utara',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Sabtu, 10:00 - 16:00',
            'phone_number' => '(021) 5380924',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 4,
            'subdistrict_id' => 1,
            'name' => 'Bengkel Dokter Mobil BSD',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Ciater Bar. No.182, Buaran, Kec. Serpong, Kota Tangerang Selatan, Banten 15310',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Sabtu, 10:00 - 16:00',
            'phone_number' => '(021) 53809115',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 5,
            'subdistrict_id' => 6,
            'name' => 'Bengkel.Ku',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Pd. Kacang No.55, RT.4/RW.3, Parigi, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15228',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Sabtu, 10:00 - 16:00',
            'phone_number' => '(021) 53808115',
            'is_active' => 1
        ]);
    }
}
