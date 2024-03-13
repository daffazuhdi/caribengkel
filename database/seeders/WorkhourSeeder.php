<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Workhour;

class WorkhourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Workhour::create([
            'id' => 1,
            'workshop_id' => 1,
            'day_id' => 1,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 2,
            'workshop_id' => 1,
            'day_id' => 2,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 3,
            'workshop_id' => 1,
            'day_id' => 3,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 4,
            'workshop_id' => 1,
            'day_id' => 4,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 5,
            'workshop_id' => 1,
            'day_id' => 5,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 6,
            'workshop_id' => 1,
            'day_id' => 6,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 7,
            'workshop_id' => 1,
            'day_id' => 7,
            'working_hour' => '09.00 - 17.00',
        ]);

        Workhour::create([
            'id' => 8,
            'workshop_id' => 2,
            'day_id' => 1,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 9,
            'workshop_id' => 2,
            'day_id' => 2,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 10,
            'workshop_id' => 2,
            'day_id' => 3,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 11,
            'workshop_id' => 2,
            'day_id' => 4,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 12,
            'workshop_id' => 2,
            'day_id' => 5,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 13,
            'workshop_id' => 2,
            'day_id' => 6,
            'working_hour' => '09.00 - 17.00',
        ]);
        Workhour::create([
            'id' => 14,
            'workshop_id' => 2,
            'day_id' => 7,
            'working_hour' => '-',
        ]);
    }
}
