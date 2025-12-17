<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/dashboard">CRUD App</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-3">
                    <span class="navbar-text text-white">
                        <?php echo e(auth()->user()->name); ?>

                    </span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="/logout">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-light btn-sm">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">

    <h3 class="mb-4">Dashboard</h3>

    <!-- STATISTIC CARDS -->
    <div class="row">

        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <h6 class="text-muted">Total Produk</h6>
                    <h3><?php echo e(\App\Models\Product::count()); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <h6 class="text-muted">Total Kategori</h6>
                    <h3><?php echo e(\App\Models\Category::count()); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <h6 class="text-muted">Total Pelanggan</h6>
                    <h3><?php echo e(\App\Models\Customer::count()); ?></h3>
                </div>
            </div>
        </div>

    </div>

    <!-- MENU CRUD -->
    <div class="card shadow-sm">
        <div class="card-body">

            <h5 class="mb-3">Menu</h5>

            <div class="d-flex gap-2">
                <a href="/produk" class="btn btn-primary">Produk</a>
                <a href="/kategori" class="btn btn-success">Kategori</a>
                <a href="/pelanggan" class="btn btn-warning">Pelanggan</a>
            </div>

        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
<?php /**PATH /Users/hafidzzamzam0206/laravel-sanctum-crud/resources/views/dashboard.blade.php ENDPATH**/ ?>