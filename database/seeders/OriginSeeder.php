<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Origin;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Origin::create([
            'id' => 1,
            'name' => 'Japan'
        ]);

        Origin::create([
            'id' => 2,
            'name' => 'Europe'
        ]);

        Origin::create([
            'id' => 3,
            'name' => 'South Korea'
        ]);
    }
}
