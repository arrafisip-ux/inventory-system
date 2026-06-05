@extends('layouts.app')

@section('title','Edit Barang')
@section('subtitle','Edit data barang inventaris')

@section('content')

@include('partials.page-header')

<div class="custom-card">

    <form action="{{ route('barang.update',$barang->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Kode Barang</label>

            <input type="text"
                   name="kode_barang"
                   class="form-control"
                   value="{{ $barang->kode_barang }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Nama Barang</label>

            <input type="text"
                   name="nama_barang"
                   class="form-control"
                   value="{{ $barang->nama_barang }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>

            <select name="kategori_id"
                    class="form-control"
                    required>

                @foreach($kategoris as $kategori)

                    <option value="{{ $kategori->id }}"
                        {{ $barang->kategori_id == $kategori->id ? 'selected' : '' }}>
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
                   value="{{ $barang->stok }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Satuan</label>

            <input type="text"
                   name="satuan"
                   class="form-control"
                   value="{{ $barang->satuan }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Harga</label>

            <input type="number"
                   name="harga"
                   class="form-control"
                   value="{{ $barang->harga }}"
                   required>
        </div>

        <button class="btn btn-warning">
            Update
        </button>

        <a href="{{ route('barang.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection