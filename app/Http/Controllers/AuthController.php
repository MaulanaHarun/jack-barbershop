<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Layanan;
use App\Models\Jadwal;
use App\Models\Pemesanan;

class AuthController extends Controller
{
    // 1. Tampilkan Form Login
    public function loginForm()
    {
        // Cek jika sudah login, langsung ke dashboard
        if (session('admin_logged_in') == true) {
            return redirect('/admin/dashboard');
        }
        return view('admin.Login');
    }

    // 2. Proses Login (MANUAL CHECK)
    public function loginProcess(Request $request)
    {
        // Validasi input username (bukan email)
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Ambil data admin dari database berdasarkan username
        $admin = DB::table('admin')->where('username', $request->username)->first();

        // Cek User & Password
        if ($admin) {
            // Cek password hash
            if (Hash::check($request->password, $admin->password)) {
                
                // SUKSES: Buat sesi manual
                session([
                    'admin_logged_in' => true,
                    'admin_id' => $admin->id_admin,
                    'username' => $admin->username
                ]);

                return redirect('/admin/dashboard');
            }
        }

        // GAGAL
        return back()->with('error', 'Username atau Password salah!');
    }

    // 3. Logout
    public function logout()
        {
            session()->flush(); // Hapus sesi
            return redirect('/admin/login');
        }
        public function dashboard() {
        // 1. Cek Login
        if (!$this->cekLogin()) return redirect('/admin/login');

        // 2. Ambil Data Statistik untuk Dashboard
        $total_pesanan = Pemesanan::count();
        $pesanan_hari_ini = Pemesanan::whereDate('created_at', date('Y-m-d'))->count();
        $pendapatan = Pemesanan::join('layanan', 'pemesanan.layanan_id', '=', 'layanan.id_layanan')->sum('layanan.harga');
        $total_layanan = Layanan::count();

        // 3. Ambil 5 Pesanan Terbaru untuk tabel
        $terbaru = Pemesanan::with(['layanan', 'jadwal'])
                    ->orderBy('id_pemesanan', 'desc')
                    ->limit(5)
                    ->get();

        return view('admin.Dashboard', compact(
            'total_pesanan', 
            'pesanan_hari_ini', 
            'pendapatan', 
            'total_layanan',
            'terbaru'
        ));
    }
}