<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();

        $totalKategori = Kategori::count();

        $barangMasuk = BarangMasuk::sum('jumlah');

        $barangKeluar = BarangKeluar::sum('jumlah');

        return view('dashboard.index', compact(
            'totalBarang',
            'totalKategori',
            'barangMasuk',
            'barangKeluar'
        ));
    }
}