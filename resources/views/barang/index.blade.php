@extends('layouts.app')

@section('title','Barang')
@section('subtitle','Kelola data inventaris barang')

@section('content')

@include('partials.page-header')

<button class="btn btn-primary mb-3">
    Tambah Barang
</button>

<div class="custom-card">

<table class="table table-dark table-hover">

    <thead>

        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

        <tr>
            <td>BRG001</td>
            <td>Laptop</td>
            <td>Elektronik</td>
            <td>10</td>
            <td>12.000.000</td>
            <td>
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
        </tr>

    </tbody>

</table>

</div>

@endsection