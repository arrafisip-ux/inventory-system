@extends('layouts.app')

@section('title','Tambah Kategori')
@section('subtitle','Tambah data kategori baru')

@section('content')

@include('partials.page-header')

<div class="custom-card">

    <form action="{{ route('kategori.store') }}"
          method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">
                Nama Kategori
            </label>

            <input type="text"
                   name="nama_kategori"
                   class="form-control"
                   required>
        </div>

        <button type="submit"
                class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('kategori.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection