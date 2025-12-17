<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-warning">
            <h5 class="mb-0">Edit Kategori</h5>
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

            <form method="POST" action="/kategori/update/{{ $category->id }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input 
                        type="text" 
                        name="name" 
                        class="form-control"
                        value="{{ $category->name }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea 
                        name="description" 
                        class="form-control"
                        rows="3"
                    >{{ $category->description }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/kategori" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-warning">Update</button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>
