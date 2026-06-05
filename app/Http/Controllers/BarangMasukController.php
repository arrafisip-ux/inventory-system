<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangMasuks = BarangMasuk::with('barang')
                            ->latest()
                            ->get();

        return view(
            'barang-masuk.index',
            compact('barangMasuks')
        );
    }

    public function create()
    {
        $barangs = Barang::all();

        return view(
            'barang-masuk.create',
            compact('barangs')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required'
        ]);

        BarangMasuk::create([
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal
        ]);

        $barang = Barang::findOrFail(
            $request->barang_id
        );

        $barang->stok += $request->jumlah;

        $barang->save();

        return redirect('/barang-masuk')
            ->with(
                'success',
                'Barang masuk berhasil ditambahkan'
            );
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(
        Request $request,
        string $id
    )
    {
    }

    public function destroy(string $id)
    {
    }
}