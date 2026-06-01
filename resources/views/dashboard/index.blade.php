@extends('layouts.app')

@section('content')

<div class="page-header">
    <h2>Dashboard</h2>
    <p>Selamat datang di Sistem Informasi Inventaris Barang</p>
</div>

<div class="row g-4">

    <div class="col-md-3">
        <div class="stats-card primary">

            <div>
                <h3>120</h3>
                <span>Total Barang</span>
            </div>

            <i class='bx bx-package'></i>

        </div>
    </div>

    <div class="col-md-3">
        <div class="stats-card success">

            <div>
                <h3>12</h3>
                <span>Total Kategori</span>
            </div>

            <i class='bx bx-category'></i>

        </div>
    </div>

    <div class="col-md-3">
        <div class="stats-card warning">

            <div>
                <h3>56</h3>
                <span>Barang Masuk</span>
            </div>

            <i class='bx bx-download'></i>

        </div>
    </div>

    <div class="col-md-3">
        <div class="stats-card danger">

            <div>
                <h3>34</h3>
                <span>Barang Keluar</span>
            </div>

            <i class='bx bx-upload'></i>

        </div>
    </div>

</div>

<div class="row mt-4">

    <div class="col-lg-8">

        <div class="custom-card">

            <div class="card-header-custom">
                Grafik Inventaris
            </div>

            <div class="chart-placeholder">
                Grafik akan ditampilkan di sini
            </div>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="custom-card">

            <div class="card-header-custom">
                Aktivitas Terbaru
            </div>

            <ul class="activity-list">
                <li>Barang Laptop ditambahkan</li>
                <li>Barang Printer keluar</li>
                <li>Kategori Elektronik dibuat</li>
                <li>Update stok Mouse</li>
            </ul>

        </div>

    </div>

</div>

@endsection