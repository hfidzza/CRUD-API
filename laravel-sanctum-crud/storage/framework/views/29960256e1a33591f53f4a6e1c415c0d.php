<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kategori</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="bg-light">

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Data Kategori</h4>
        <a href="/kategori/create" class="btn btn-primary">+ Tambah Kategori</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th width="50">ID</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($category->name); ?></td>
                            <td><?php echo e($category->description); ?></td>
                            <td>
                                <a href="/kategori/edit/<?php echo e($category->id); ?>" 
                                   class="btn btn-sm btn-warning">
                                   Edit
                                </a>

                                <a href="/kategori/delete/<?php echo e($category->id); ?>"
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Yakin hapus kategori?')">
                                   Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="text-center">
                                Data kategori belum ada
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>
<?php /**PATH /Users/hafidzzamzam0206/laravel-sanctum-crud/resources/views/kategori/index.blade.php ENDPATH**/ ?>