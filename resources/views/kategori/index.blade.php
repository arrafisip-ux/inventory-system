@extends('layouts.app')

@section('title','Kategori')
@section('subtitle','Kelola data kategori barang')

@section('content')

@include('partials.page-header')

<button class="btn btn-primary mb-3">
    Tambah Kategori
</button>

<div class="custom-card">

    <table class="table table-dark table-hover align-middle">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>Elektronik</td>
                <td>
                    <button class="btn btn-warning btn-sm">
                        Edit
                    </button>

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </td>
            </tr>

        </tbody>

    </table>

</div>

@endsection