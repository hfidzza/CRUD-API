@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-warning">
        <h5 class="mb-0">Edit Pelanggan</h5>
    </div>

    <div class="card-body">
        <form method="POST" action="/pelanggan/update/{{ $customer->id }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name"
                       class="form-control"
                       value="{{ $customer->name }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email"
                       class="form-control"
                       value="{{ $customer->email }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="phone"
                       class="form-control"
                       value="{{ $customer->phone }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="address"
                          class="form-control"
                          rows="3">{{ $customer->address }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="/pelanggan" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-warning">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
