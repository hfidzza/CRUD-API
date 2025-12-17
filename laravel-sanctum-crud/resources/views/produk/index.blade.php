@extends('layouts.app')

@section('title', 'Produk')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Data Produk</h3>
    <a href="/produk/create" class="btn btn-primary">+ Tambah Produk</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->category->name ?? '_' }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ number_format($p->harga) }}</td>
                    <td>{{ $p->stock }}</td>
                    <td>
                        <a href="/produk/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
                        <a
                            href="/produk/delete/{{ $p->id }}"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus?')"
                        >
                            Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection