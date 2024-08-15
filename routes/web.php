<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;


// Halaman Utama
Route::get('/', function () {
    return view('home');
});

// Halaman Mutasi
// Route::get('/mutasi', [MutasiController::class, 'index'])->name('mutasi.index');
Route::post('/mutasi', [MutasiController::class, 'store'])->name('mutasi.store');

// Halaman Autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Pendaftaran
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Halaman Dashboard
Route::get('/mutasi', function () {
    return view('mutasi');
});
Route::get('/dashboard', [MutasiController::class, 'index'])->name('dashboard');

// Halaman Data
Route::get('/data', [DataController::class, 'index'])->name('data.index');

// Export Data
Route::get('/data/export', function () {
    return Excel::download(new SiswaExport, 'data_mutasi_siswa.xlsx');
})->name('data.export');

// Halaman Pengaturan
Route::get('/setting', function () {
    return view('setting');
});

// Rute untuk Siswa
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.detail');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/{id}/export', [SiswaController::class, 'exportToWord'])->name('siswa.export');
