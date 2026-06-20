@extends('layouts.app')

@section('title','Tambah Barang')
@section('subtitle','Tambah data barang inventaris')

@section('content')

@include('partials.page-header')

<div class="custom-card">

    <form action="{{ route('barang.store') }}"
          method="POST">

        @csrf

        <div class="mb-3">
            <label>Kode Barang</label>

            <input type="text"
                   name="kode_barang"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Nama Barang</label>

            <input type="text"
                   name="nama_barang"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>

            <select name="kategori_id"
                    class="form-control"
                    required>

                <option value="">
                    -- Pilih Kategori --
                </option>

                @foreach($kategoris as $kategori)

                    <option value="{{ $kategori->id }}">
                        {{ $kategori->nama_kategori }}
                    </option>

                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label>Stok</label>

            <input type="number"
                   name="stok"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Satuan</label>

            <input type="text"
                   name="satuan"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
    <label>Harga Beli</label>

    <input
        type="number"
        name="harga_beli"
        class="form-control"
        required>
</div>

<div class="mb-3">
    <label>Harga Jual</label>

    <input
        type="number"
        name="harga_jual"
        class="form-control"
        required>
</div>

        <button class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('barang.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection