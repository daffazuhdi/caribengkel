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

        Workhour::create([
            'id' => 15,
            'workshop_id' => 3,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 16,
            'workshop_id' => 3,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 17,
            'workshop_id' => 3,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 18,
            'workshop_id' => 3,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 19,
            'workshop_id' => 3,
            'day_id' => 5,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 20,
            'workshop_id' => 3,
            'day_id' => 6,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 21,
            'workshop_id' => 3,
            'day_id' => 7,
            'working_hour' => '-',
        ]);

        Workhour::create([
            'id' => 22,
            'workshop_id' => 4,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 23,
            'workshop_id' => 4,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 24,
            'workshop_id' => 4,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 25,
            'workshop_id' => 4,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 26,
            'workshop_id' => 4,
            'day_id' => 5,
            'working_hour' => '08.00 - 17.00',
        ]);

        Workhour::create([
            'id' => 27,
            'workshop_id' => 4,
            'day_id' => 6,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 28,
            'workshop_id' => 4,
            'day_id' => 7,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 29,
            'workshop_id' => 5,
            'day_id' => 1,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 30,
            'workshop_id' => 5,
            'day_id' => 1,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 31,
            'workshop_id' => 5,
            'day_id' => 2,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 32,
            'workshop_id' => 5,
            'day_id' => 3,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 33,
            'workshop_id' => 5,
            'day_id' => 4,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 34,
            'workshop_id' => 5,
            'day_id' => 5,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 35,
            'workshop_id' => 5,
            'day_id' => 6,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 36,
            'workshop_id' => 5,
            'day_id' => 7,
            'working_hour' => '-',
        ]);

        Workhour::create([
            'id' => 37,
            'workshop_id' => 6,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 38,
            'workshop_id' => 6,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 39,
            'workshop_id' => 6,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 40,
            'workshop_id' => 6,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 41,
            'workshop_id' => 6,
            'day_id' => 5,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 42,
            'workshop_id' => 6,
            'day_id' => 6,
            'working_hour' => '08.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 43,
            'workshop_id' => 6,
            'day_id' => 7,
            'working_hour' => '08.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 44,
            'workshop_id' => 7,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 45,
            'workshop_id' => 7,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 46,
            'workshop_id' => 7,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 47,
            'workshop_id' => 7,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 48,
            'workshop_id' => 7,
            'day_id' => 5,
            'working_hour' => '08.00 - 17.00',
        ]);

        Workhour::create([
            'id' => 49,
            'workshop_id' => 7,
            'day_id' => 6,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 50,
            'workshop_id' => 7,
            'day_id' => 7,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 51,
            'workshop_id' => 8,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 52,
            'workshop_id' => 8,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 53,
            'workshop_id' => 8,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 54,
            'workshop_id' => 8,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 55,
            'workshop_id' => 8,
            'day_id' => 5,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 56,
            'workshop_id' => 8,
            'day_id' => 6,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 57,
            'workshop_id' => 8,
            'day_id' => 7,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 58,
            'workshop_id' => 9,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 59,
            'workshop_id' => 9,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 60,
            'workshop_id' => 9,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 61,
            'workshop_id' => 9,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 62,
            'workshop_id' => 9,
            'day_id' => 5,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 63,
            'workshop_id' => 9,
            'day_id' => 6,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 64,
            'workshop_id' => 9,
            'day_id' => 7,
            'working_hour' => '-',
        ]);

        Workhour::create([
            'id' => 65,
            'workshop_id' => 10,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 66,
            'workshop_id' => 10,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 67,
            'workshop_id' => 10,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 68,
            'workshop_id' => 10,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 69,
            'workshop_id' => 10,
            'day_id' => 5,
            'working_hour' => '08.00 - 17.00',
        ]);

        Workhour::create([
            'id' => 70,
            'workshop_id' => 10,
            'day_id' => 6,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 71,
            'workshop_id' => 11,
            'day_id' => 1,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 72,
            'workshop_id' => 11,
            'day_id' => 2,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 73,
            'workshop_id' => 11,
            'day_id' => 3,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 74,
            'workshop_id' => 11,
            'day_id' => 4,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 75,
            'workshop_id' => 11,
            'day_id' => 5,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 76,
            'workshop_id' => 12,
            'day_id' => 1,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 77,
            'workshop_id' => 12,
            'day_id' => 2,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 78,
            'workshop_id' => 12,
            'day_id' => 3,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 79,
            'workshop_id' => 12,
            'day_id' => 4,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 80,
            'workshop_id' => 12,
            'day_id' => 5,
            'working_hour' => '08.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 81,
            'workshop_id' => 12,
            'day_id' => 6,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 82,
            'workshop_id' => 12,
            'day_id' => 7,
            'working_hour' => '09.00 - 19.00',
        ]);

        Workhour::create([
            'id' => 83,
            'workshop_id' => 13,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 84,
            'workshop_id' => 13,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 85,
            'workshop_id' => 13,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 86,
            'workshop_id' => 13,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 87,
            'workshop_id' => 13,
            'day_id' => 5,
            'working_hour' => '08.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 88,
            'workshop_id' => 14,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 89,
            'workshop_id' => 14,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 90,
            'workshop_id' => 14,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 91,
            'workshop_id' => 14,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 92,
            'workshop_id' => 14,
            'day_id' => 5,
            'working_hour' => '08.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 93,
            'workshop_id' => 15,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 94,
            'workshop_id' => 15,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 95,
            'workshop_id' => 15,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 96,
            'workshop_id' => 15,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 97,
            'workshop_id' => 15,
            'day_id' => 5,
            'working_hour' => '08.00 - 17.00',
        ]);

        Workhour::create([
            'id' => 98,
            'workshop_id' => 15,
            'day_id' => 6,
            'working_hour' => '08.00 - 17.00',
        ]);

        Workhour::create([
            'id' => 99,
            'workshop_id' => 15,
            'day_id' => 7,
            'working_hour' => '08.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 100,
            'workshop_id' => 16,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 101,
            'workshop_id' => 16,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 102,
            'workshop_id' => 16,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 103,
            'workshop_id' => 16,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 104,
            'workshop_id' => 16,
            'day_id' => 5,
            'working_hour' => '08.00 - 17.00',
        ]);

        Workhour::create([
            'id' => 105,
            'workshop_id' => 17,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 106,
            'workshop_id' => 17,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 107,
            'workshop_id' => 17,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 108,
            'workshop_id' => 17,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 109,
            'workshop_id' => 17,
            'day_id' => 5,
            'working_hour' => '08.30 - 17.00',
        ]);

        Workhour::create([
            'id' => 110,
            'workshop_id' => 17,
            'day_id' => 6,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 111,
            'workshop_id' => 17,
            'day_id' => 7,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 112,
            'workshop_id' => 18,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 113,
            'workshop_id' => 18,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 114,
            'workshop_id' => 18,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 115,
            'workshop_id' => 18,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 116,
            'workshop_id' => 18,
            'day_id' => 5,
            'working_hour' => '08.00 - 17.00',
        ]);

        Workhour::create([
            'id' => 117,
            'workshop_id' => 18,
            'day_id' => 6,
            'working_hour' => '08.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 118,
            'workshop_id' => 18,
            'day_id' => 7,
            'working_hour' => '08.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 119,
            'workshop_id' => 19,
            'day_id' => 1,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 120,
            'workshop_id' => 19,
            'day_id' => 2,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 121,
            'workshop_id' => 19,
            'day_id' => 3,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 122,
            'workshop_id' => 19,
            'day_id' => 4,
            'working_hour' => '09.30 - 18.00',
        ]);

        Workhour::create([
            'id' => 123,
            'workshop_id' => 19,
            'day_id' => 5,
            'working_hour' => '08.30 - 17.00',
        ]);

        Workhour::create([
            'id' => 124,
            'workshop_id' => 20,
            'day_id' => 1,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 125,
            'workshop_id' => 20,
            'day_id' => 2,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 126,
            'workshop_id' => 20,
            'day_id' => 3,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 127,
            'workshop_id' => 20,
            'day_id' => 4,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 128,
            'workshop_id' => 20,
            'day_id' => 5,
            'working_hour' => '08.00 - 17.00',
        ]);

        Workhour::create([
            'id' => 129,
            'workshop_id' => 20,
            'day_id' => 6,
            'working_hour' => '09.00 - 18.00',
        ]);

        Workhour::create([
            'id' => 130,
            'workshop_id' => 20,
            'day_id' => 7,
            'working_hour' => '09.00 - 18.00',
        ]);
    }
}
