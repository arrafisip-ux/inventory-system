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
                <h3>{{ $totalBarang }}</h3>
                <span>Total Barang</span>
            </div>

            <i class='bx bx-package'></i>

        </div>
    </div>

    <div class="col-md-3">
    <div class="stats-card success">

        <div>
            <h3>{{ $totalKategori }}</h3>
            <span>Total Kategori</span>
        </div>

        <i class='bx bx-category'></i>

    </div>
</div>

    <div class="col-md-3">
        <div class="stats-card warning">

            <div>
                <h3>{{ $barangMasuk }}</h3>
                <span>Barang Masuk</span>
            </div>

            <i class='bx bx-download'></i>

        </div>
    </div>

    <div class="col-md-3">
        <div class="stats-card danger">

            <div>
                <h3>{{ $barangKeluar }}</h3>
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

            <canvas id="inventoryChart"></canvas>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="custom-card">

            <div class="card-header-custom">
                Aktivitas Terbaru
            </div>

            <ul class="activity-list">

    <li class="activity-info">
    Total Barang : {{ $totalBarang }}
</li>

<li class="activity-info">
    Total Kategori : {{ $totalKategori }}
</li>

<li class="activity-success">
    Total Barang Masuk : {{ $barangMasuk }}
</li>

<li class="activity-danger">
    Total Barang Keluar : {{ $barangKeluar }}
</li>
</ul>

        </div>

    </div>

</div>


<script>

window.onload = function () {

    const canvas = document.getElementById('inventoryChart');

    const isLightMode =
        document.body.classList.contains('light-mode');

    const chartTextColor =
        isLightMode ? '#334155' : '#e2e8f0';

    const chartGridColor =
        isLightMode
            ? 'rgba(0,0,0,0.08)'
            : 'rgba(255,255,255,0.08)';

    new Chart(canvas, {

        type: 'bar',

        data: {

            labels: [
                'Barang',
                'Kategori',
                'Masuk',
                'Keluar'
            ],

            datasets: [{

                label: 'Statistik Inventaris',

                data: [
                    {{ $totalBarang }},
                    {{ $totalKategori }},
                    {{ $barangMasuk }},
                    {{ $barangKeluar }}
                ],

                backgroundColor: [
                    '#3b82f6',
                    '#22c55e',
                    '#f59e0b',
                    '#ef4444'
                ],

                borderRadius: 12

            }]

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {

                legend: {
                    display: false
                }

            },

            scales: {

                y: {

                    beginAtZero: true,

                    ticks: {
                        color: chartTextColor,
                        font: {
                            size: 13
                        }
                    },

                    grid: {
                        color: chartGridColor
                    }

                },

                x: {

                    ticks: {
                        color: chartTextColor,
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    },

                    grid: {
                        display: false
                    }

                }

            }

        }

    });

};

</script>
@endsection