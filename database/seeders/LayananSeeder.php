<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('layanan')->insert([
            [
                'nama' => 'Haircut Regular',
                'deskripsi' => 'Potong rambut standar dengan hasil rapi.',
                'harga' => 25000,
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Haircut + Wash',
                'deskripsi' => 'Potong rambut lengkap dengan keramas.',
                'harga' => 35000,
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kids Haircut',
                'deskripsi' => 'Potong rambut khusus anak-anak.',
                'harga' => 20000,
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Beard Trim',
                'deskripsi' => 'Perapian jenggot dan kumis.',
                'harga' => 15000,
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
