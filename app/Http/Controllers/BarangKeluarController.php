<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barangKeluars = BarangKeluar::with('barang')
            ->latest()
            ->get();

        return view(
            'barang-keluar.index',
            compact('barangKeluars')
        );
    }

    public function create()
    {
        $barangs = Barang::all();

        return view(
            'barang-keluar.create',
            compact('barangs')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required',
            'jumlah' => 'required|numeric|min:1',
            'tanggal' => 'required'
        ]);

        $barang = Barang::findOrFail(
            $request->barang_id
        );

        if ($request->jumlah > $barang->stok) {
            return back()->with(
                'error',
                'Stok tidak mencukupi'
            );
        }

        BarangKeluar::create([
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal
        ]);

        $barang->stok -= $request->jumlah;
        $barang->save();

        return redirect('/barang-keluar')
            ->with(
                'success',
                'Barang keluar berhasil ditambahkan'
            );
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(
        Request $request,
        string $id
    ) {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}