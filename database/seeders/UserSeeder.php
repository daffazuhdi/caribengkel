<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'role_id' => 1,
            'first_name' => 'Daffa',
            'last_name' => 'Zuhdi',
            'email' => 'daffa@gmail.com',
            'password' => bcrypt('password'),
            'is_active' => 1
        ]);

        User::create([
            'id' => 2,
            'role_id' => 2,
            'first_name' => 'Alya',
            'last_name' => 'Brown',
            'email' => 'browna@gmail.com',
            'password' => bcrypt('12345678'),
            'is_active' => 1
        ]);

        User::create([
            'id' => 3,
            'role_id' => 2,
            'first_name' => 'Rayhan',
            'last_name' => 'Rei',
            'email' => 'rrei@gmail.com',
            'password' => bcrypt('12345678'),
            'is_active' => 1
        ]);
    }
}
