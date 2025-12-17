@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Produk</h5>
        </div>

        <div class="card-body">
            <form action="/produk" method="POST">
            @csrf

            <div class="mb-3">
                <label>Kategori</label>
                <select name="category_id" class="form-select" required>
                    <option value="">-- Pilih --</option>
                    @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea type="number" name="harga" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" class="form-control" name="stock" required>
            </div>

            <div class="d-flex justify-content-end">
                <a href="/produk" class="btn btn-secondary me-2">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection