<?php

namespace Database\Seeders;

use App\Models\WorkshopPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkshopPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        WorkshopPrice::create([
            'id' => 1,
            'service_id' => 1,
            'workshop_id' => 1,
            'price' => 100000
        ]);

        WorkshopPrice::create([
            'id' => 2,
            'service_id' => 2,
            'workshop_id' => 1,
            'price' => 100000
        ]);

        WorkshopPrice::create([
            'id' => 3,
            'service_id' => 3,
            'workshop_id' => 1,
            'price' => 100000
        ]);

        WorkshopPrice::create([
            'id' => 4,
            'service_id' => 4,
            'workshop_id' => 1,
            'price' => 100000
        ]);

        WorkshopPrice::create([
            'id' => 5,
            'service_id' => 5,
            'workshop_id' => 2,
            'price' => 200000
        ]);

        WorkshopPrice::create([
            'id' => 6,
            'service_id' => 6,
            'workshop_id' => 1,
            'price' => 30000
        ]);

    }
}
