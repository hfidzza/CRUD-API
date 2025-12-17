<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Edit Produk</h5>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/produk/update/{{ $product->id }}">
                @csrf

                <!-- Kategori -->
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option 
                                value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Nama -->
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input 
                        type="text" 
                        name="nama" 
                        class="form-control"
                        value="{{ $product->nama }}"
                        required
                    >
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea 
                        name="description" 
                        class="form-control" 
                        rows="3"
                    >{{ $product->description }}</textarea>
                </div>

                <!-- Harga -->
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input 
                        type="number" 
                        name="harga" 
                        class="form-control"
                        value="{{ $product->harga }}"
                        required
                    >
                </div>

                <!-- Stok -->
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input 
                        type="number" 
                        name="stock" 
                        class="form-control"
                        value="{{ $product->stock }}"
                        required
                    >
                </div>

                <!-- BUTTON -->
                <div class="d-flex justify-content-between">
                    <a href="/produk" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-primary">Update Produk</button>
                </div>

            </form>

        </div>
    </div>

</div>

<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
