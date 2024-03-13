<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;
use Carbon\Carbon;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rating::create([
            'id' => 1,
            'user_id' => 1,
            'workshop_id' => 1,
            'specialty_id' => 3,
            'rate' => 5,
            'comment' => 'Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.Harga terjangkau dan pengerjaan cepat.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Rating::create([
            'id' => 2,
            'user_id' => 3,
            'workshop_id' => 2,
            'specialty_id' => 1,
            'rate' => 3,
            'comment' => 'Pengerjaan sat-set dan bisa ditunggu hanya saja AC nya masih kurang dingin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Rating::create([
            'id' => 3,
            'user_id' => 1,
            'workshop_id' => 1,
            'specialty_id' => 5,
            'rate' => 3,
            'comment' => 'Penggantian ban yang lumayan cepat.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Rating::create([
            'id' => 4,
            'user_id' => 3,
            'workshop_id' => 1,
            'specialty_id' => 3,
            'rate' => 4,
            'comment' => 'Penggantian oli yang baik!.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
