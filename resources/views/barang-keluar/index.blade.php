@extends('layouts.app')

@section('title','Barang Keluar')
@section('subtitle','Transaksi barang keluar')

@section('content')

@include('partials.page-header')

<a href="{{ route('barang-keluar.create') }}"
   class="btn btn-danger mb-3">
    Tambah Barang Keluar
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="custom-card">

<table class="table table-dark table-hover">

    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Barang</th>
            <th>Jumlah</th>
        </tr>
    </thead>

    <tbody>

    @forelse($barangKeluars as $keluar)

        <tr>
            <td>
                {{ date('d-m-Y', strtotime($keluar->tanggal)) }}
            </td>

            <td>
                {{ $keluar->barang->nama_barang }}
            </td>

            <td>
                {{ $keluar->jumlah }}
            </td>
        </tr>

    @empty

        <tr>
            <td colspan="3" class="text-center">
                Belum ada transaksi barang keluar
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

</div>

@endsection