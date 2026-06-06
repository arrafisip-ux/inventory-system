<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function cetak(Request $request)
    {
        $dari = $request->dari;
        $sampai = $request->sampai;

        $masuk = BarangMasuk::with('barang')
            ->whereBetween('tanggal', [$dari, $sampai])
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
            ->whereBetween('tanggal', [$dari, $sampai])
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

        $pdf = Pdf::loadView(
            'laporan.pdf',
            compact(
                'laporan',
                'dari',
                'sampai'
            )
        );

        return $pdf->stream('laporan-inventaris.pdf');
    }
}