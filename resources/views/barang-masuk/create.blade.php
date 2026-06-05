@extends('layouts.app')

@section('title','Tambah Barang Masuk')
@section('subtitle','Input transaksi barang masuk')

@section('content')

@include('partials.page-header')

<div class="custom-card">

<form action="{{ route('barang-masuk.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">

        <label class="text-white mb-2">
            Barang
        </label>

        <select name="barang_id"
                class="form-control"
                required>

            <option value="">
                -- Pilih Barang --
            </option>

            @foreach($barangs as $barang)

                <option value="{{ $barang->id }}">
                    {{ $barang->nama_barang }}
                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label class="text-white mb-2">
            Jumlah
        </label>

        <input type="number"
               name="jumlah"
               class="form-control"
               required>

    </div>

    <div class="mb-3">

        <label class="text-white mb-2">
            Tanggal
        </label>

        <input type="date"
               name="tanggal"
               class="form-control"
               required>

    </div>

    <button type="submit"
            class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('barang-masuk.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

</div>

@endsection