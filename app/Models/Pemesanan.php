<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $fillable = [
        'nama_pelanggan','no_telp',
        'layanan_id','jadwal_id','status'
    ];

    public function layanan() {
        return $this->belongsTo(Layanan::class,'layanan_id');
    }

    public function jadwal() {
        return $this->belongsTo(Jadwal::class,'jadwal_id');
    }
}
