@extends('layouts.app')

@section('title','Barang Keluar')
@section('subtitle','Tambah transaksi barang keluar')

@section('content')

@include('partials.page-header')

<div class="custom-card">

<form action="{{ route('barang-keluar.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">
        <label>Barang</label>

        <select name="barang_id"
                class="form-control"
                required>

            <option value="">
                -- Pilih Barang --
            </option>

            @foreach($barangs as $barang)

                <option value="{{ $barang->id }}">
                    {{ $barang->nama_barang }}
                    (Stok : {{ $barang->stok }})
                </option>

            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label>Jumlah</label>

        <input type="number"
               name="jumlah"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Tanggal</label>

        <input type="date"
               name="tanggal"
               class="form-control"
               required>
    </div>

    <button type="submit"
            class="btn btn-danger">
        Simpan
    </button>

    <a href="{{ route('barang-keluar.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

</div>

@endsection