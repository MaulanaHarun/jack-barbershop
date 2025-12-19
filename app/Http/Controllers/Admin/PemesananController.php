<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Jadwal;
use App\Models\Layanan;

class PemesananController extends Controller
{
    public function index() {
        return view('admin.pemesanan.index', [
            'data' => Pemesanan::with('layanan','jadwal')->get()
        ]);
    }

    public function edit($id) {
        return view('admin.pemesanan.edit', [
            'data' => Pemesanan::find($id),
            'layanan' => Layanan::all(),
            'jadwal' => Jadwal::all()
        ]);
    }

   public function store(Request $r)
{
    // Cek apakah jadwal sudah dipakai
    $cek = Pemesanan::where('jadwal_id', $r->jadwal_id)->first();

    if ($cek) {
        return back()->with('error', 'Jadwal sudah dibooking!');
    }

    // Simpan pemesanan
    Pemesanan::create($r->all());

    // Update status jadwal jadi penuh
    Jadwal::where('id_jadwal', $r->jadwal_id)
          ->update(['status' => 'penuh']);

    return redirect('/')->with('success', 'Reservasi berhasil!');
}


    public function destroy($id) {
        Pemesanan::where('id_pemesanan',$id)->delete();
        return back();
    }
}
