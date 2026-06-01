@extends('layouts.app')

@section('title','Barang Masuk')
@section('subtitle','Transaksi barang masuk')

@section('content')

@include('partials.page-header')

<button class="btn btn-success mb-3">
    Tambah Barang Masuk
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
            <td>Laptop</td>
            <td>5</td>
        </tr>

    </tbody>

</table>

</div>

@endsection