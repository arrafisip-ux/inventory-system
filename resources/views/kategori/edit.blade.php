@extends('layouts.app')

@section('title','Edit Kategori')
@section('subtitle','Edit data kategori')

@section('content')

@include('partials.page-header')

<div class="custom-card">

    <form action="{{ route('kategori.update', $kategori->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label class="form-label">
                Nama Kategori
            </label>

            <input type="text"
                   name="nama_kategori"
                   class="form-control"
                   value="{{ $kategori->nama_kategori }}"
                   required>

        </div>

        <button type="submit"
                class="btn btn-warning">
            Update
        </button>

        <a href="{{ route('kategori.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection