<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('kategori', KategoriController::class);

Route::resource('barang', BarangController::class);

Route::resource(
    'barang-masuk',
    BarangMasukController::class
);

Route::resource(
    'barang-keluar',
    BarangKeluarController::class
);

Route::get('/laporan', function () {
    return view('laporan.index');
});

// require __DIR__.'/auth.php';