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
            'about' => 'Bengkel Mobil BOS BSD merupakan salah satu jaringan Bengkel BOS yang tersebar di seluruh Indonesia. Bengkel BOS menyediakan jasa ganti ban, ganti oli, dan servis lainnya seperti spooring, balancing, isi nitrogen, tune-up, servis kaki-kaki, kuras matic, oli differential, oli transmisi serta service berkala. Layanan Safety Check 58 komponen mobil diberikan gratis setiap pelanggan melakukan servis.
            Mekanik Bengkel Mobil BOS dibekali pelatihan dan alat-alat yang modern dengan standarisasi bengkel resmi yang menjadikan mekanik kami ahli dibidangnya.
            Fasilitas nyaman seperti ruang tunggu ber-AC, toilet bersih, Wifi, kopi dan teh disediakan bagi pelanggan Bengkel BOS.',
            'address' => 'Jl. Kp., Cilenggang, Kec. Serpong, Kota Tangerang Selatan',
            'photo' => 'bengkel_bos_bsd.png',
            'operational_hour' => 'Senin s.d. Sabtu, 10:00 - 16:00',
            'phone_number' => '+6285695930369',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.682018265211!2d106.66706017499105!3d-6.3054431936837725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e4d36873d365%3A0x5e334177b38373b0!2sBengkel%20Mobil%20BOS%20BSD!5e0!3m2!1sen!2sid!4v1714017383490!5m2!1sen!2sid',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 2,
            'subdistrict_id' => 4,
            'name' => 'Bengkel Servis AC Ciputat',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            'about' => 'BengkelIN merupakan bengkel umum yang memiliki beberapa layanan untuk ganti oli, servis kaki-kaki, ac mobil, dan juga tune up.',
            'address' => 'Jl. Buaran raya Jl. Raya Viktor Bsd No.87, Ciater, Kec. Serpong, Kota Tangerang Selatan, Banten 15310',
            'photo' => 'bengkelin.png',
            'operational_hour' => 'Senin s.d. Sabtu, 10:00 - 16:00',
            'phone_number' => '+6285695930369',
            'location' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126894.69278893943!2d106.5346449!3d-6.3345173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e4c857795a1f%3A0x5dbb17ae050e06a3!2sBENGKELIN%20Viktor-BSD%20MOTUL%20Authorized%20Partner%20Garage!5e0!3m2!1sen!2sid!4v1715939666926!5m2!1sen!2sid',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 4,
            'subdistrict_id' => 2,
            'name' => 'Bengkel Dokter Mobil Alam Sutera',
            'about' => 'Dokter Mobil merupakan bengkel mobil modern spesialisasi AC mobil dan tune up. Merupakan pionir bengkel mobil bersertifikasi ISO 9001:2015, dengan kualitas yang transparan dan masa garansi di seluruh cabang untuk jaminan layanannya.',
            'address' => 'Jl. Raya Serpong Kilometer 7, Pakualam, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15143',
            'photo' => 'doktermobil.png',
            'operational_hour' => 'Senin s.d. Sabtu, 10:00 - 16:00',
            'phone_number' => '+6285695930369',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7932.460307124377!2d106.63303119357909!3d-6.233362200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbacaf073d2d%3A0x94fd9cbe33521505!2sDokter%20mobil%20Alam%20sutra!5e0!3m2!1sen!2sid!4v1715943806373!5m2!1sen!2sid',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 5,
            'subdistrict_id' => 6,
            'name' => 'Bengkel.Ku',
            'about' => 'Kami menyediakan berbagai jenis service diantaranya Tune Up, Spooring balancing, Service rem, Jasa kuras mesin/matic, Dll.
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
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
            Selain itu kami juga memiliki beberapa jenis paket service berkala, paket Sultan, paket ekonomis dan paket bensin.',
            'address' => 'Jl. Kp. Halaman No.03, RT.3/RW.2, Suci, Kec. Pondok Aren, Kota Tangerang Selatan, Banten',
            'photo' => 'bengkel_ac_ciputat.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:00 - 18:30',
            'phone_number' => '0812-3691-1111',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 21,
            'subdistrict_id' => 6,
            'name' => 'A JAYA BAN',
            'about' => 'A JAYA BAN adalah bengkel umum yang berada di Tangerang Selatan, dan bisa anda hubungi atau datangi untuk melakukan service kendaraan Daihatsu, Honda, Mazda, Mitsubishi, Nissan, Suzuki, Toyota, dan Wuling.',
            'address' => 'Jl. Jombang Raya No.5d, Pd. Aren, Kec. Pd. Aren, Kota Tangerang, Banten 15226',
            'photo' => 'ajayaban.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:00 - 18:30',
            'phone_number' => '+6285695930369',
            'location' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.042085111008!2d106.7041471!3d-6.2581868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTUnMjkuNSJTIDEwNsKwNDInMTUuMyJF!5e0!3m2!1sen!2sid!4v1716015775040!5m2!1sen!2sid',
            'is_active' => 1
        ]);

        Workshop::create([
            'id' => 22,
            'subdistrict_id' => 1,
            'name' => 'BSD Rims Center',
            'about' => 'BRC (BSD RIMS CENTER) adalah bengkel ban yang berada di Tangerang Selatan, dan bisa anda hubungi atau datangi untuk melakukan service kendaraan Daihatsu, Honda, Mazda, Mitsubishi, Nissan, Suzuki, Toyota, dan Wuling.',
            'address' => 'Jl. Letnan Sutopo, Rw. Buntu, Kec. Serpong, Kota Tangerang Selatan, Banten 15310',
            'photo' => 'bsdrimscenter.png',
            'operational_hour' => 'Senin s.d. Jumat, 09:00 - 18:30',
            'phone_number' => '+6285695930369',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.85770344832991!2d106.68274469269225!3d-6.30004902323271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb003066df31%3A0x5503f9dae8d5e7d5!2sBSD%20Rims%20Center%20(BRC)%20-%20Velg%2C%20Ban%2C%20Spooring%20Mobil%20BSD!5e0!3m2!1sen!2sid!4v1716018321085!5m2!1sen!2sid',
            'is_active' => 1
        ]);
    }
}
