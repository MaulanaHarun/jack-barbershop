<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Jadwal;
use App\Models\Pemesanan;

class FrontController extends Controller
{
    public function home() {
        return view('frontend.home');
    }

    public function reservasi() {
        return view('frontend.reservasi', [
            'layanan' => Layanan::all(),
            'jadwal' => Jadwal::where('status', 'tersedia')->get()
        ]);
    }

    public function reservasiProses(Request $r) {
        $save = Pemesanan::create([
            'nama_pelanggan' => $r->nama,
            'no_telp' => $r->no_telp,
            'layanan_id' => $r->layanan_id,
            'jadwal_id' => $r->jadwal_id,
            'status' => 'menunggu'
        ]);

        // ubah jadwal jadi penuh
        Jadwal::where('id_jadwal', $r->jadwal_id)->update([
            'status' => 'penuh'
        ]);

        return redirect('/status/' . $save->id_pemesanan);
    }

    public function status($id) {
        $data = Pemesanan::with('layanan','jadwal')->find($id);
        return view('frontend.status', compact('data'));
    }
}
