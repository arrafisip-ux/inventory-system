@extends('layouts.app')

@section('title','Barang')
@section('subtitle','Kelola data inventaris barang')

@section('content')

@include('partials.page-header')

<a href="{{ route('barang.create') }}"
   class="btn btn-primary mb-3">
    Tambah Barang
</a>

@if(session('success'))
<div class="alert alert-success mb-3">
    {{ session('success') }}
</div>
@endif

<div class="custom-card">

    <div class="table-responsive">

        <table class="table table-dark table-hover">

            <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Harga</th>
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
                    Rp {{ number_format($barang->harga,0,',','.') }}
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
                <td colspan="7" class="text-center">
                    Belum ada data barang
                </td>
            </tr>

        @endforelse

               </tbody>

        </table>

    </div>

</div>

@endsection