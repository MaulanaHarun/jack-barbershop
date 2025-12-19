<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id(); // Primary key auto-increment
            $table->string('nama_pelanggan'); // Nama pelanggan
            $table->string('produk'); // Nama produk yang dipesan
            $table->integer('jumlah'); // Jumlah pesanan
            $table->decimal('harga', 12, 2); // Harga produk
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Rollback migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
};
