@extends('layouts.app')

@section('title','Barang Keluar')
@section('subtitle','Transaksi barang keluar')

@section('content')

@include('partials.page-header')

<button class="btn btn-danger mb-3">
    Tambah Barang Keluar
</button>

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

        <tr>
            <td>01-06-2026</td>
            <td>Printer</td>
            <td>2</td>
        </tr>

    </tbody>

</table>

</div>

@endsection