<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController; // Gunakan AdminController tunggal

/*
|--------------------------------------------------------------------------
| REDIRECT ROOT
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/home');
});

/*
|--------------------------------------------------------------------------
| CUSTOMER AREA (FRONTEND)
|--------------------------------------------------------------------------
*/
Route::get('/home', [FrontController::class, 'home']);
Route::get('/reservasi', [FrontController::class, 'reservasi']);
Route::post('/reservasi/proses', [FrontController::class, 'reservasiProses']);
Route::get('/status/{id}', [FrontController::class, 'status']);
Route::get('/about', [FrontController::class, 'about']);
// Route::get('/profil', [FrontController::class, 'profil']); // Aktifkan jika method profil sudah ada

/*
|--------------------------------------------------------------------------
| AUTHENTICATION (LOGIN ADMIN)
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'loginProcess'])->name('admin.login.submit');
Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| ADMIN AREA (DASHBOARD)
|--------------------------------------------------------------------------
*/
// Kita gunakan prefix 'admin' saja. 
// Keamanan sudah ditangani oleh fungsi 'cekLogin()' di dalam AdminController.

Route::prefix('admin')->group(function () {

    // 1. Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

    // 2. Kelola Layanan
    Route::prefix('layanan')->group(function () {
        // Menampilkan Tabel
        Route::get('/', [AdminController::class, 'layananIndex']);
        
        // (Opsional) Jika nanti Anda membuat fitur Tambah/Edit
        // Route::get('/create', [AdminController::class, 'layananCreate']);
        // Route::post('/store', [AdminController::class, 'layananStore']);
        // Route::get('/delete/{id}', [AdminController::class, 'layananDestroy']);
    });

    // 3. Kelola Jadwal
    Route::prefix('jadwal')->group(function () {
        Route::get('/', [AdminController::class, 'jadwalIndex']);
        // Route::get('/create', [AdminController::class, 'jadwalCreate']);
        // Route::post('/store', [AdminController::class, 'jadwalStore']);
    });

    // 4. Kelola Pemesanan
    Route::prefix('pemesanan')->group(function () {
        Route::get('/', [AdminController::class, 'pemesananIndex']);
    });

});