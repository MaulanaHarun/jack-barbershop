<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\PemesananController;

Route::get('/', function () {
    return redirect('/home');
});

/*
|--------------------------------------------------------------------------
| LOGIN KHUSUS ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'loginProcess'])->name('admin.login.submit');
Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| CUSTOMER AREA (TIDAK PAKAI LOGIN)
|--------------------------------------------------------------------------
*/
Route::get('/home', [FrontController::class, 'home']);
Route::get('/reservasi', [FrontController::class, 'reservasi']);
Route::post('/reservasi/proses', [FrontController::class, 'reservasiProses']);
Route::get('/status/{id}', [FrontController::class, 'status']);
Route::get('/profil', [FrontController::class, 'profil']);

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::middleware('admin')->prefix('admin')->group(function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard']);

    Route::prefix('layanan')->group(function () {
        Route::get('/', [LayananController::class, 'index']);
        Route::get('/create', [LayananController::class, 'create']);
        Route::post('/store', [LayananController::class, 'store']);
        Route::get('/edit/{id}', [LayananController::class, 'edit']);
        Route::post('/update/{id}', [LayananController::class, 'update']);
        Route::get('/delete/{id}', [LayananController::class, 'destroy']);
    });

    Route::prefix('jadwal')->group(function () {
        Route::get('/', [JadwalController::class, 'index']);
        Route::get('/create', [JadwalController::class, 'create']);
        Route::post('/store', [JadwalController::class, 'store']);
        Route::get('/edit/{id}', [JadwalController::class, 'edit']);
        Route::post('/update/{id}', [JadwalController::class, 'update']);
        Route::get('/delete/{id}', [JadwalController::class, 'destroy']);
    });

    Route::prefix('pemesanan')->group(function () {
        Route::get('/', [PemesananController::class, 'index']);
        Route::get('/edit/{id}', [PemesananController::class, 'edit']);
        Route::post('/update/{id}', [PemesananController::class, 'update']);
        Route::get('/delete/{id}', [PemesananController::class, 'destroy']);
    });
    Route::get('/reservasi', function () {
    return view('reservasi', [
        'layanan' => App\Models\Layanan::all(),
        'jadwal'  => App\Models\Jadwal::where('status','tersedia')->get()
    ]);
});

});
