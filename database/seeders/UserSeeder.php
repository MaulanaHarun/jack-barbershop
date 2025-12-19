<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'Administrator',
                'email' => 'admin@jeck.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        ]);
    }
}
