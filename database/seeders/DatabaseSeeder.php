<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            OriginSeeder::class,
            CarBrandSeeder::class,
            CarModelSeeder::class,
            CarSeeder::class,
            CarUserSeeder::class,
            CarServiceSeeder::class,
            SubdistrictSeeder::class,
            FacilitySeeder::class,
            SpecialtySeeder::class,
            ServiceSeeder::class,
            WorkshopSeeder::class,
            SpecialtyWorkshopSeeder::class,
            CarBrandWorkshopSeeder::class,
            FacilityWorkshopSeeder::class,
            WorkshopPriceSeeder::class,
            ReviewSeeder::class,
            WorkhourSeeder::class
        ]);
    }
}
