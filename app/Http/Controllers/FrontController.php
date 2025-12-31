<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Jadwal;
use App\Models\Pemesanan;

class FrontController extends Controller
{
    // ==========================================
    // 1. HALAMAN HOME (Perbaikan Utama Disini)
    // ==========================================
    public function home() {
        // AMBIL DATA DARI DATABASE
        $layanan = Layanan::all(); 

        // KIRIM KE VIEW MENGGUNAKAN COMPACT
        return view('frontend.home', compact('layanan'));
    }

    // ==========================================
    // 2. HALAMAN RESERVASI
    // ==========================================
    public function reservasi() {
        // Kita ambil semua jadwal (termasuk yang penuh)
        // Nanti di View baru kita filter visualnya (abu-abu jika penuh)
        $jadwal = Jadwal::orderBy('tanggal', 'asc')->orderBy('waktu', 'asc')->get();
        $layanan = Layanan::all();

        return view('frontend.reservasi', compact('layanan', 'jadwal'));
    }

    // ==========================================
    // 3. PROSES SIMPAN RESERVASI
    // ==========================================
    public function reservasiProses(Request $r) {
        // VALIDASI INPUT (Wajib diisi)
        $r->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'layanan_id' => 'required',
            'jadwal_id' => 'required'
        ]);

        // CEK APAKAH JADWAL MASIH TERSEDIA (Mencegah Double Booking)
        $cekJadwal = Jadwal::find($r->jadwal_id);
        if ($cekJadwal->status == 'penuh') {
            return back()->with('error', 'Maaf, jadwal ini baru saja diambil orang lain!');
        }

        // SIMPAN PEMESANAN
        $save = Pemesanan::create([
            'nama_pelanggan' => $r->nama,
            'no_telp' => $r->no_telp,
            'layanan_id' => $r->layanan_id,
            'jadwal_id' => $r->jadwal_id,
            'status' => 'menunggu'
        ]);

        // UPDATE STATUS JADWAL JADI PENUH
        $cekJadwal->update(['status' => 'penuh']);

        // Redirect ke halaman status
        return redirect('/status/' . $save->id_pemesanan);
    }

    // ==========================================
    // 4. HALAMAN BUKTI BOOKING
    // ==========================================
    public function status($id) {
        $data = Pemesanan::with('layanan','jadwal')->find($id);
        
        // Cek jika data tidak ditemukan (misal user asal ketik URL)
        if(!$data) {
            return redirect('/');
        }

        return view('frontend.status', compact('data'));
    }

    public function about() {
        return view('frontend.about');
    }
}