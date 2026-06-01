@extends('layouts.app')

@section('title','Laporan Inventaris')
@section('subtitle','Rekap data inventaris')

@section('content')

@include('partials.page-header')

<div class="row mb-3">

    <div class="col-md-4">
        <input type="date" class="form-control">
    </div>

    <div class="col-md-4">
        <input type="date" class="form-control">
    </div>

    <div class="col-md-4">
        <button class="btn btn-primary">
            Filter
        </button>

        <button class="btn btn-success">
            Cetak
        </button>
    </div>

</div>

<div class="custom-card">

    <table class="table table-dark table-hover">

        <thead>

            <tr>
                <th>Tanggal</th>
                <th>Barang</th>
                <th>Jenis</th>
                <th>Jumlah</th>
            </tr>

        </thead>

        <tbody>

            <tr>
                <td>01-06-2026</td>
                <td>Laptop</td>
                <td>Masuk</td>
                <td>5</td>
            </tr>

        </tbody>

    </table>

</div>

@endsection