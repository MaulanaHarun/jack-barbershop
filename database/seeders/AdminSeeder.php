<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Cek jika admin sudah ada
        $cek = DB::table('admin')->where('username', 'admin')->first();
        if ($cek) {
            return; 
        }

        DB::table('admin')->insert([
            'username'   => 'admin',
            'password'   => Hash::make('123456'), // password = 123456
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
