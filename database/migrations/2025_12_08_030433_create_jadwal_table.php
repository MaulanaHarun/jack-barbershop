<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('status', 15)->default('tersedia');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('jadwal');
    }
};
