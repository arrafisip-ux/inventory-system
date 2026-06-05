<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;

Route::get('/dashboard', function () {

    $totalBarang = Barang::count();

    $totalKategori = Kategori::count();

    $barangMasuk = BarangMasuk::sum('jumlah');

    $barangKeluar = BarangKeluar::sum('jumlah');

    return view(
        'dashboard.index',
        compact(
            'totalBarang',
            'totalKategori',
            'barangMasuk',
            'barangKeluar'
        )
    );

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
Route::get('/laporan', function (Illuminate\Http\Request $request) {

    $dari = $request->dari;
    $sampai = $request->sampai;

    $laporan = collect();

    if ($dari && $sampai) {

        $masuk = BarangMasuk::with('barang')
            ->whereBetween(
                'tanggal',
                [$dari, $sampai]
            )
            ->get()
            ->map(function ($item) {

                return [
                    'tanggal' => $item->tanggal,
                    'barang' => $item->barang->nama_barang,
                    'jenis' => 'Masuk',
                    'jumlah' => $item->jumlah
                ];

            });

        $keluar = BarangKeluar::with('barang')
            ->whereBetween(
                'tanggal',
                [$dari, $sampai]
            )
            ->get()
            ->map(function ($item) {

                return [
                    'tanggal' => $item->tanggal,
                    'barang' => $item->barang->nama_barang,
                    'jenis' => 'Keluar',
                    'jumlah' => $item->jumlah
                ];

            });

        $laporan = $masuk
            ->merge($keluar)
            ->sortBy('tanggal');
    }

    return view(
        'laporan.index',
        compact(
            'laporan',
            'dari',
            'sampai'
        )
    );

})->name('laporan');

// require __DIR__.'/auth.php';