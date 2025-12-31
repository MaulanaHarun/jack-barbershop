<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Fungsi untuk memproteksi halaman (Middleware manual)
    private function cekLogin() {
        if (!session('admin_logged_in')) {
            return false;
        }
        return true;
    }

    public function dashboard() {
        // Cek login dulu
        if (!$this->cekLogin()) return redirect('/admin/login')->with('error', 'Silakan login dulu');

        return view('admin.Dashboard');
    }

    public function layananIndex() {
        if (!$this->cekLogin()) return redirect('/admin/login');
        
        $layanan = \App\Models\Layanan::all();
        return view('admin.layanan.index', compact('layanan'));
    }

    public function jadwalIndex() {
        if (!$this->cekLogin()) return redirect('/admin/login');
        
        $jadwal = \App\Models\Jadwal::all();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    public function pemesananIndex() {
        if (!$this->cekLogin()) return redirect('/admin/login');
        
        $pemesanan = \App\Models\Pemesanan::all();
        return view('admin.pemesanan.index', compact('pemesanan'));
    }
}