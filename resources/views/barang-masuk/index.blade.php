@extends('layouts.app')

@section('title','Barang Masuk')
@section('subtitle','Transaksi barang masuk')

@section('content')

@include('partials.page-header')

<a href="{{ route('barang-masuk.create') }}"
   class="btn btn-success mb-3">
    Tambah Barang Masuk
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="custom-card">

<table class="table table-hover">

    <thead>

        <tr>
            <th>Tanggal</th>
            <th>Barang</th>
            <th>Jumlah</th>
        </tr>

    </thead>

    <tbody>

    @forelse($barangMasuks as $masuk)

        <tr>

            <td>
                {{ date('d-m-Y', strtotime($masuk->tanggal)) }}
            </td>

            <td>
                {{ $masuk->barang->nama_barang }}
            </td>

            <td>
                {{ $masuk->jumlah }}
            </td>

        </tr>

    @empty

        <tr>
            <td colspan="3" class="text-center">
                Belum ada transaksi barang masuk
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

</div>

@endsection