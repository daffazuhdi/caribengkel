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
            'phone_number' => '0818111111222',
            'password' => bcrypt('password'),
            'photo' => 'user_1_profile.png',
            'is_active' => 1
        ]);

        User::create([
            'id' => 2,
            'role_id' => 2,
            'first_name' => 'Alya',
            'last_name' => 'Brown',
            'email' => 'browna@gmail.com',
            'phone_number' => '0818111111223',
            'password' => bcrypt('12345678'),
            'photo' => 'template.svg',
            'is_active' => 1
        ]);

        User::create([
            'id' => 3,
            'role_id' => 2,
            'first_name' => 'Rayhan',
            'last_name' => 'Rei',
            'email' => 'rrei@gmail.com',
            'phone_number' => '0818111111224',
            'password' => bcrypt('12345678'),
            'photo' => 'template.svg',
            'is_active' => 1
        ]);

        User::create([
            'id' => 4,
            'role_id' => 2,
            'first_name' => 'Anisya',
            'last_name' => 'Larasati',
            'email' => 'anisya@gmail.com',
            'phone_number' => '0818111113314',
            'password' => bcrypt('password'),
            'photo' => 'template.svg',
            'is_active' => 1
        ]);

        User::create([
            'id' => 5,
            'role_id' => 2,
            'first_name' => 'Naufal',
            'last_name' => 'Fawwaz',
            'email' => 'fawwaz@gmail.com',
            'phone_number' => '0818111113114',
            'password' => bcrypt('password'),
            'photo' => 'template.svg',
            'is_active' => 1
        ]);
    }
}
