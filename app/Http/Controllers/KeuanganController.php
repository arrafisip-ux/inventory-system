<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index()
{
    $totalModal =
        \App\Models\BarangMasuk::with('barang')
        ->get()
        ->sum(function ($item) {
            return $item->jumlah *
                   $item->barang->harga_beli;
        });

    $totalPenjualan =
        \App\Models\BarangKeluar::with('barang')
        ->get()
        ->sum(function ($item) {
            return $item->jumlah *
                   $item->barang->harga_jual;
        });

    $labaBersih =
        $totalPenjualan - $totalModal;

    return view(
        'keuangan.index',
        compact(
            'totalModal',
            'totalPenjualan',
            'labaBersih'
        )
    );
}
}