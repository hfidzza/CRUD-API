<?php $__env->startSection('title', 'Produk'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Data Produk</h3>
    <a href="/produk/create" class="btn btn-primary">+ Tambah Produk</a>
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
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($p->nama); ?></td>
                    <td><?php echo e($p->category->name ?? '_'); ?></td>
                    <td><?php echo e($p->description); ?></td>
                    <td><?php echo e(number_format($p->harga)); ?></td>
                    <td><?php echo e($p->stock); ?></td>
                    <td>
                        <a href="/produk/edit/<?php echo e($p->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a
                            href="/produk/delete/<?php echo e($p->id); ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus?')"
                        >
                            Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/hafidzzamzam0206/laravel-sanctum-crud/resources/views/produk/index.blade.php ENDPATH**/ ?>