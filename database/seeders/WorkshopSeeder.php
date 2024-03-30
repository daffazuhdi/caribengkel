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

        Workshop::create([
            'id' => 6,
            'subdistrict_id' => 3,
            'name' => 'Bengkel Oli Surya',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Suryamas No.01, RT.1/RW.3, Suri, Kec. Ciputat, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Sabtu, 09:00 - 18:00',
            'phone_number' => '(021) 52108232',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 7,
            'subdistrict_id' => 2,
            'name' => 'Bengkel Sampoerna',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. M. Yamin No.11, RT.1/RW.2, Pamil, Kec. Serpong Utara, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:00 - 18:00',
            'phone_number' => '(021) 22307255',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 8,
            'subdistrict_id' => 4,
            'name' => 'BAPAK JAYA MOTOR',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Sampiran No.65, RT.2/RW.5, Rahma, Kec. Ciputat Timur, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:30 - 19:00',
            'phone_number' => '0812-1034-9023',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 9,
            'subdistrict_id' => 5,
            'name' => 'Devina Motor',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Braina No.02, RT.2/RW.4, Samin, Kec. Pamulang, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:00 - 19:00',
            'phone_number' => '(021) 21309055',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 10,
            'subdistrict_id' => 7,
            'name' => 'Bengkel Berkah Kelompok',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Selir No.35, RT.3/RW.2, Rumpang, Kec. Setu, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:30 - 19:00',
            'phone_number' => '(021) 45523451',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 11,
            'subdistrict_id' => 1,
            'name' => 'Bengkel Surya Paloh',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Sinar Silver No.12, RT.3/RW.2, Kemiri, Kec. Serpong, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:30 - 19:00',
            'phone_number' => '0812-2341-9065',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 12,
            'subdistrict_id' => 1,
            'name' => 'MESHIN FAST',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Prima No.23, RT.1/RW.1, Talaga, Kec. Serpong, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:30 - 19:00',
            'phone_number' => '0813-1515-2444',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 13,
            'subdistrict_id' => 3,
            'name' => 'Bengkel Manual Ciputat',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Lampung No.11, RT.2/RW.3, Kamisan, Kec. Ciputat, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 08:30 - 18:00',
            'phone_number' => '(021) 47125491',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 14,
            'subdistrict_id' => 2,
            'name' => 'FANIS Motor',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Iman M No.06, RT.4/RW.5, Parini, Kec. Serpong Utara, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:00 - 19:00',
            'phone_number' => '(021) 56833191',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 15,
            'subdistrict_id' => 6,
            'name' => 'Bengkel Farah Motor',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Soekarno No.20, RT.3/RW.5, Lengko Sawah, Kec. Pondok Aren, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 08:00 - 18:00',
            'phone_number' => '0811-7816-2304',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 16,
            'subdistrict_id' => 5,
            'name' => 'FS Auto',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Brimo No.21, RT.4/RW.6, Damian, Kec. Pamulang, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 08:00 - 18:00',
            'phone_number' => '(021) 57415233',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 17,
            'subdistrict_id' => 7,
            'name' => 'DAFFA SPEED',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Sarinah No.11, RT.4/RW.6, Damian, Kec. Setu, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 08:00 - 18:00',
            'phone_number' => '(021) 34565213',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 18,
            'subdistrict_id' => 2,
            'name' => 'Bengkel Fajar Matahari',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Hj. Yamin No.03, RT.2/RW.2, Kampu, Kec. Serpong Utara, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:00 - 18:30',
            'phone_number' => '(021) 12341111',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 19,
            'subdistrict_id' => 4,
            'name' => 'Oli Speed Cabang Ciputat Timur',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Ahmad Yani No.24, RT.1/RW.3, Samira, Kec. Ciputat Timur, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:00 - 18:30',
            'phone_number' => '0815-0934-7652',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 20,
            'subdistrict_id' => 6,
            'name' => 'ILA OLI',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            <br>Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Kp. Halaman No.03, RT.3/RW.2, Suci, Kec. Pondok Aren, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:00 - 18:30',
            'phone_number' => '0812-3691-1111',
            'is_active' => 1
        ]);
    }
}
