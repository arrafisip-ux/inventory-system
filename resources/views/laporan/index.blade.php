@extends('layouts.app')

@section('title','Laporan Inventaris')
@section('subtitle','Rekap data inventaris')

@section('content')

@include('partials.page-header')

<form action="{{ route('laporan') }}" method="GET">

    <div class="row mb-3">

        <div class="col-md-4">

            <input
                type="date"
                name="dari"
                value="{{ $dari }}"
                class="form-control">

        </div>

        <div class="col-md-4">

            <input
                type="date"
                name="sampai"
                value="{{ $sampai }}"
                class="form-control">

        </div>

        <div class="col-md-4">

            <button
                type="submit"
                class="btn btn-primary">
                Filter
            </button>

            <a
    href="{{ route('laporan.cetak', [
        'dari' => $dari,
        'sampai' => $sampai
    ]) }}"
    target="_blank"
    class="btn btn-success">

    Cetak PDF

</a>

        </div>

    </div>

</form>

<div class="custom-card">

    <div class="table-responsive">

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

            @forelse($laporan as $item)

                <tr>

                    <td>
                        {{ date('d-m-Y', strtotime($item['tanggal'])) }}
                    </td>

                    <td>
                        {{ $item['barang'] }}
                    </td>

                    <td>

                        @if($item['jenis'] == 'Masuk')

                            <span class="badge bg-success">
                                Masuk
                            </span>

                        @else

                            <span class="badge bg-danger">
                                Keluar
                            </span>

                        @endif

                    </td>

                    <td>
                        {{ $item['jumlah'] }}
                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="4" class="text-center">

                        Pilih tanggal untuk melihat laporan

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection