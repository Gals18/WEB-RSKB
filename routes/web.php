<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UGDController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('Home')->group(function () {
    Route::get('/', [WebController::class, 'index']);
    Route::get('/Pendaftaran', [PendaftaranController::class, 'index']);
    Route::get('/Profil', [WebController::class, 'profil']);
    Route::get('/UGD', [WebController::class, 'ugd']);
    Route::get('/Poliklinik', [WebController::class, 'poliklinik']);
    Route::get('/Berita', [WebController::class, 'berita']);
    Route::get('/RawatInap', [WebController::class, 'rawat']);
    Route::get('/Operasi', [WebController::class, 'operasi']);
    Route::get('/Radiologi', [WebController::class, 'radiologi']);
    Route::get('/Laboratorium', [WebController::class, 'laboratorium']);
    Route::get('/Apotek', [WebController::class, 'apotek']);
    Route::get('/Jadwal', [WebController::class, 'jadwaldokter']);
    Route::get('/Pengumuman', [WebController::class, 'pengumuman']);
    // Route::post('/create-golongan', [GolonganController::class, 'store']);
    // Route::get('/detail-golongan/{golongan}', [GolonganController::class, 'show']);
    // Route::get('/edit-obat/{obat}', [ObatController::class, 'edit']);
});


Route::middleware(['guest'])->group(function () {
    Route::get('/Login', [AdminController::class, 'login'])->name('login');
    Route::post('/AksiLogin', [AdminController::class, 'aksilogin'])->name('aksilogin');
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::group(["middleware" => "cekLogin"], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

        Route::prefix('Layanan')->group(function () {
            Route::get('/', [LayananController::class, 'index'])->name('layanan');
        });
    });
});
