<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        // Jam standar
        $jamList = [
            '09:00:00',
            '11:00:00',
            '13:00:00',
            '15:00:00',
            '17:00:00'
        ];

        // Generate untuk 7 hari ke depan
        for ($i = 0; $i < 7; $i++) {
            $tanggal = Carbon::now()->addDays($i)->format('Y-m-d');

            foreach ($jamList as $waktu) {
                DB::table('jadwal')->insert([
                    'tanggal' => $tanggal,
                    'waktu'   => $waktu,
                    'status'  => 'tersedia',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
