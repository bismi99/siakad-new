<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin123'),
            'role' => 'Admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Pak Dadang',
            'email' => 'dadang@test.com',
            'password' => Hash::make('user123'),
            'role' => 'Guru'
        ]);
        DB::table('users')->insert([
            'name' => 'Bismi',
            'email' => 'bismi@test.com',
            'password' => Hash::make('user123'),
            'role' => 'Siswa'
        ]);
    }
}
