@extends('layouts.app')

@section('title','Data Kategori')
@section('subtitle','Kelola data kategori barang')

@section('content')

@include('partials.page-header')

<a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">
    Tambah Kategori
</a>

<div class="custom-card">

    @if(session('success'))
        <div class="alert alert-success mb-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-dark table-hover align-middle">

        <thead>
            <tr>
                <th width="60">No</th>
                <th>Nama Kategori</th>
                <th width="200">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse($kategoris as $kategori)

                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $kategori->nama_kategori }}</td>

                    <td>

                        <a href="{{ route('kategori.edit', $kategori->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('kategori.destroy', $kategori->id) }}"
                              method="POST"
                              style="display:inline-block">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus kategori?')">
                                Hapus
                            </button>

                        </form>

                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="3" class="text-center">
                        Belum ada data kategori
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection