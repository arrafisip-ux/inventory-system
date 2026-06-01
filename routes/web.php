<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/kategori', function () {
    return view('kategori.index');
});

Route::get('/barang', function () {
    return view('barang.index');
});

Route::get('/barang-masuk', function () {
    return view('barang-masuk.index');
});

Route::get('/barang-keluar', function () {
    return view('barang-keluar.index');
});

Route::get('/laporan', function () {
    return view('laporan.index');
});