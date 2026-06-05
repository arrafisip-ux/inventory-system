<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::with('kategori')
                        ->latest()
                        ->get();

        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        $kategoris = Kategori::all();

        return view('barang.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'stok' => 'required|numeric',
            'satuan' => 'required',
            'harga' => 'required|numeric'
        ]);

        Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori_id,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'harga' => $request->harga
        ]);

        return redirect('/barang')
            ->with('success', 'Barang berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);
        $kategoris = Kategori::all();

        return view('barang.edit', compact(
            'barang',
            'kategoris'
        ));
    }

    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);

        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'stok' => 'required|numeric',
            'satuan' => 'required',
            'harga' => 'required|numeric'
        ]);

        $barang->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori_id,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'harga' => $request->harga
        ]);

        return redirect('/barang')
            ->with('success', 'Barang berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);

        $barang->delete();

        return redirect('/barang')
            ->with('success', 'Barang berhasil dihapus');
    }
}