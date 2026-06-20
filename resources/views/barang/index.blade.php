@extends('layouts.app')

@section('title','Data Barang')
@section('subtitle','Kelola data inventaris barang')

@section('content')

@include('partials.page-header')

<div class="d-flex justify-content-between align-items-center mb-3">

    <a href="{{ route('barang.create') }}"
       class="btn btn-primary">
        Tambah Barang
    </a>

    <form action="{{ route('barang.index') }}"
          method="GET"
          class="d-flex"
          style="width:300px;">

        <input type="text"
               name="search"
               value="{{ $search ?? '' }}"
               class="form-control me-2"
               placeholder="Cari barang...">

        <button class="btn btn-success">
            Cari
        </button>

    </form>

</div>

@if(session('success'))
<div class="alert alert-success mb-3">
    {{ session('success') }}
</div>
@endif

<div class="custom-card">

    <div class="table-responsive">

        <table class="table table-hover">

            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

            @forelse($barangs as $barang)

                <tr>

                    <td>{{ $barang->kode_barang }}</td>

                    <td>{{ $barang->nama_barang }}</td>

                    <td>{{ $barang->kategori->nama_kategori }}</td>

                    <td>{{ $barang->stok }}</td>

                    <td>{{ $barang->satuan }}</td>

                    <td>
                        Rp {{ number_format($barang->harga_beli,0,',','.') }}
                    </td>

                    <td>
                        Rp {{ number_format($barang->harga_jual,0,',','.') }}
                    </td>

                    <td>

                        <a href="{{ route('barang.edit',$barang->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('barang.destroy',$barang->id) }}"
                              method="POST"
                              style="display:inline-block">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus barang?')">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="8" class="text-center">
                        Belum ada data barang
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-3">
        {{ $barangs->links() }}
    </div>

</div>

@endsection