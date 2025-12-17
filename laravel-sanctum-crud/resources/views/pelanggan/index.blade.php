@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Data Pelanggan</h3>
    <a href="/pelanggan/create" class="btn btn-primary">
        + Tambah Pelanggan
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th width="50">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->phone }}</td>
                    <td>{{ $c->address }}</td>
                    <td>
                        <a href="/pelanggan/edit/{{ $c->id }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <a href="/pelanggan/delete/{{ $c->id }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus pelanggan ini?')">
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
