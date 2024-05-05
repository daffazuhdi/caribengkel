<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'id' => 1,
            'user_id' => 1,
            'workshop_id' => 1,
            'specialty_id' => 3,
            'rating' => 5,
            'comment' => 'Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 2,
            'user_id' => 3,
            'workshop_id' => 2,
            'specialty_id' => 1,
            'rating' => 3,
            'comment' => 'Pengerjaan sat-set dan bisa ditunggu hanya saja AC nya masih kurang dingin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 3,
            'user_id' => 1,
            'workshop_id' => 1,
            'specialty_id' => 5,
            'rating' => 3,
            'comment' => 'Penggantian ban yang lumayan cepat.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 4,
            'user_id' => 3,
            'workshop_id' => 1,
            'specialty_id' => 3,
            'rating' => 4,
            'comment' => 'Penggantian oli yang baik!.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 5,
            'user_id' => 2,
            'workshop_id' => 3,
            'specialty_id' => 5,
            'rating' => 4,
            'comment' => 'Penggantian ban dilakukan secara cepat',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 6,
            'user_id' => 3,
            'workshop_id' => 3,
            'specialty_id' => 4,
            'rating' => 2,
            'comment' => 'Not recommended',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 7,
            'user_id' => 2,
            'workshop_id' => 7,
            'specialty_id' => 6,
            'rating' => 5,
            'comment' => 'Mantap',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 8,
            'user_id' => 4,
            'workshop_id' => 10,
            'specialty_id' => 2,
            'rating' => 4,
            'comment' => 'Good service and nice facility',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 9,
            'user_id' => 2,
            'workshop_id' => 18,
            'specialty_id' => 1,
            'rating' => 4,
            'comment' => 'Perbaikan AC sangat cepat dan AC menjadi dingin kembali. Super.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 10,
            'user_id' => 4,
            'workshop_id' => 18,
            'specialty_id' => 1,
            'rating' => 5,
            'comment' => 'Sebelumnya AC saya tidak berfungsi dengan baik, tapi setelah ke sini, AC saya sekarang sudah bagus dan lebih dingin dari sebelumnya.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 11,
            'user_id' => 4,
            'workshop_id' => 15,
            'specialty_id' => 7,
            'rating' => 3,
            'comment' => 'Pengerjaannya lama dengan harga yang lumayan tinggi.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 12,
            'user_id' => 2,
            'workshop_id' => 15,
            'specialty_id' => 2,
            'rating' => 1,
            'comment' => 'Mahal ga kira-kira.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 13,
            'user_id' => 1,
            'workshop_id' => 4,
            'specialty_id' => 3,
            'rating' => 1,
            'comment' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 14,
            'user_id' => 3,
            'workshop_id' => 4,
            'specialty_id' => 3,
            'rating' => 1,
            'comment' => 'Mahal banget dan pelayanannya juga kurang.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 15,
            'user_id' => 1,
            'workshop_id' => 5,
            'specialty_id' => 1,
            'rating' => 3,
            'comment' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 16,
            'user_id' => 2,
            'workshop_id' => 5,
            'specialty_id' => 1,
            'rating' => 4,
            'comment' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 17,
            'user_id' => 2,
            'workshop_id' => 5,
            'specialty_id' => 2,
            'rating' => 5,
            'comment' => 'Ini gokil, sih. Spesialisasi kaki-kaki mobil yang harga terjangkau di kantong dan kualitasnya juga bagus.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 18,
            'user_id' => 3,
            'workshop_id' => 6,
            'specialty_id' => 3,
            'rating' => 2,
            'comment' => 'Pelayanannya buruk dan saya dikasih aki bekas bukan aki baru. Sekarang, baru 3 hari udah mati akinya.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 19,
            'user_id' => 5,
            'workshop_id' => 7,
            'specialty_id' => 4,
            'rating' => 5,
            'comment' => 'Bisa memperbaiki LED Sen bus adiputro jb2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 20,
            'user_id' => 3,
            'workshop_id' => 7,
            'specialty_id' => 4,
            'rating' => 5,
            'comment' => 'Pengerjaannya cepat dan peralatannya juga sudah lengkap.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 21,
            'user_id' => 4,
            'workshop_id' => 8,
            'specialty_id' => 3,
            'rating' => 4,
            'comment' => 'Ganti oli mesin, mobil saya terasa lebih baik. Pertahankan kualitasnya.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 22,
            'user_id' => 3,
            'workshop_id' => 8,
            'specialty_id' => 3,
            'rating' => 5,
            'comment' => 'Bengkel mobil terbaik.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 23,
            'user_id' => 1,
            'workshop_id' => 9,
            'specialty_id' => 4,
            'rating' => 3,
            'comment' => 'Pelayanannya kurang, tapi hasil pengerjaan sudah lumayan bagus dan rapi.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 24,
            'user_id' => 2,
            'workshop_id' => 9,
            'specialty_id' => 4,
            'rating' => 4,
            'comment' => 'Harganya sesuai dengan hasil. Mantap',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 25,
            'user_id' => 4,
            'workshop_id' => 9,
            'specialty_id' => 1,
            'rating' => 4,
            'comment' => 'Recommended untuk perbaikan AC mobil, pemiliknya sangat ramah, dan hasil pengerjaan sangat baik. Sukses selalu.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        Review::create([
            'id' => 26,
            'user_id' => 3,
            'workshop_id' => 10,
            'specialty_id' => 2,
            'rating' => 1,
            'comment' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 27,
            'user_id' => 2,
            'workshop_id' => 10,
            'specialty_id' => 2,
            'rating' => 2,
            'comment' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 28,
            'user_id' => 4,
            'workshop_id' => 11,
            'specialty_id' => 2,
            'rating' => 2,
            'comment' => 'Pergi ke bengkel 2x gabisa menyelesaikan kerusakannya, sangat membuang-buang uang dan waktu',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 29,
            'user_id' => 2,
            'workshop_id' => 11,
            'specialty_id' => 2,
            'rating' => 2,
            'comment' => 'Tidak memperbaiki kerusakannya',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 30,
            'user_id' => 3,
            'workshop_id' => 12,
            'specialty_id' => 3,
            'rating' => 4,
            'comment' => 'Saya mengalami kecelekaan dimana mobil saya tiba-tiba bermasalah. Untungnya, ketika saya menelpon bengkel ini, mereka langsung merespon dan menemani saya hingga sampai ke bengkel mereka. Pelayanan yang sangat bagus.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 31,
            'user_id' => 5,
            'workshop_id' => 13,
            'specialty_id' => 3,
            'rating' => 3,
            'comment' => 'Pilihan olinya lengkap, tapi stafnya kurang ramah.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 32,
            'user_id' => 2,
            'workshop_id' => 14,
            'specialty_id' => 1,
            'rating' => 2,
            'comment' => 'Pengerjaan kurang rapi, dashboard ada yang lecet.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 33,
            'user_id' => 5,
            'workshop_id' => 14,
            'specialty_id' => 4,
            'rating' => 4,
            'comment' => 'Lampu yang dipilih cocok dengan mobil saya dan pemasangannya rapi amat.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 34,
            'user_id' => 1,
            'workshop_id' => 14,
            'specialty_id' => 4,
            'rating' => 5,
            'comment' => 'Pengerjaannya cepat, montirnya ramah, saya diberikan tips untuk memelihara lampu dengan baik.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 35,
            'user_id' => 3,
            'workshop_id' => 14,
            'specialty_id' => 5,
            'rating' => 4,
            'comment' => 'Datang jam 9, jam 10 udah beres.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 36,
            'user_id' => 3,
            'workshop_id' => 15,
            'specialty_id' => 7,
            'rating' => 3,
            'comment' => 'Kualitas kulit standar.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 37,
            'user_id' => 1,
            'workshop_id' => 15,
            'specialty_id' => 7,
            'rating' => 2,
            'comment' => 'Setelah saya liat lagi di toko online, harga jok kulit yang saya beli di sini ternyata jauh lebih mahal dengan kualitas yang sama.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 38,
            'user_id' => 2,
            'workshop_id' => 16,
            'specialty_id' => 3,
            'rating' => 2,
            'comment' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 39,
            'user_id' => 4,
            'workshop_id' => 16,
            'specialty_id' => 3,
            'rating' => 2,
            'comment' => 'Stafnya kayak kurang ngerti mobil.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 40,
            'user_id' => 5,
            'workshop_id' => 16,
            'specialty_id' => 3,
            'rating' => 3,
            'comment' => 'Abis dari bengkel, mobil saya banyak baret.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 41,
            'user_id' => 1,
            'workshop_id' => 17,
            'specialty_id' => 2,
            'rating' => 4,
            'comment' => 'Mantap. Rekomen banget.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 42,
            'user_id' => 3,
            'workshop_id' => 17,
            'specialty_id' => 2,
            'rating' => 5,
            'comment' => 'Montir-montirnya sangat ramah dan solutif.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 43,
            'user_id' => 2,
            'workshop_id' => 17,
            'specialty_id' => 2,
            'rating' => 5,
            'comment' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 44,
            'user_id' => 4,
            'workshop_id' => 17,
            'specialty_id' => 3,
            'rating' => 5,
            'comment' => 'Bengkel yang bagus tapi ga ngabisin duit, cheap parts... good service.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 45,
            'user_id' => 3,
            'workshop_id' => 18,
            'specialty_id' => 1,
            'rating' => 4,
            'comment' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 46,
            'user_id' => 5,
            'workshop_id' => 18,
            'specialty_id' => 1,
            'rating' => 4,
            'comment' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 47,
            'user_id' => 2,
            'workshop_id' => 19,
            'specialty_id' => 5,
            'rating' => 4,
            'comment' => 'Abis service, bannya langsung enak.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 48,
            'user_id' => 3,
            'workshop_id' => 19,
            'specialty_id' => 5,
            'rating' => 5,
            'comment' => 'Dikasih rekomendasi ban yang sesuai dengan mobil saya dengan harga yang oke.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 49,
            'user_id' => 5,
            'workshop_id' => 19,
            'specialty_id' => 5,
            'rating' => 5,
            'comment' => 'Tekanan bannya pas, ga terlalu keras.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 50,
            'user_id' => 1,
            'workshop_id' => 20,
            'specialty_id' => 6,
            'rating' => 4,
            'comment' => 'Semalam saya tabrakan, hari ini mobil saya udah kayak baru lagi.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 51,
            'user_id' => 4,
            'workshop_id' => 20,
            'specialty_id' => 6,
            'rating' => 5,
            'comment' => 'Pengerjaannya sangat detail.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Review::create([
            'id' => 52,
            'user_id' => 2,
            'workshop_id' => 20,
            'specialty_id' => 6,
            'rating' => 5,
            'comment' => 'Hasilnya memuaskan dengan harga yang sangat terjangkau. Ownernya sangat mengerti soal memperbaiki bodi dan warna dari kendaraan.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
