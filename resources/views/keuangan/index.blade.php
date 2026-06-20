@extends('layouts.app')

@section('title', 'Keuangan')
@section('subtitle', 'Laporan Keuangan Inventaris')

@section('content')

@include('partials.page-header')

<div class="row">

    <div class="col-md-4">
        <div class="stats-card danger">

            <div>
                <h3>
                    Rp {{ number_format($totalModal, 0, ',', '.') }}
                </h3>
                <span>Total Modal</span>
            </div>

            <i class='bx bx-money'></i>

        </div>
    </div>

    <div class="col-md-4">
        <div class="stats-card success">

            <div>
                <h3>
                    Rp {{ number_format($totalPenjualan, 0, ',', '.') }}
                </h3>
                <span>Total Penjualan</span>
            </div>

            <i class='bx bx-wallet'></i>

        </div>
    </div>

    <div class="col-md-4">
        <div class="stats-card primary">

            <div>
                <h3>
                    Rp {{ number_format($labaBersih, 0, ',', '.') }}
                </h3>
                <span>Laba Bersih</span>
            </div>

            <i class='bx bx-line-chart'></i>

        </div>
    </div>

</div>

@endsection