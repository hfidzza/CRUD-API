<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Data Pelanggan</h3>
    <a href="/pelanggan/create" class="btn btn-primary">
        + Tambah Pelanggan
    </a>
</div>

<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

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
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($c->name); ?></td>
                    <td><?php echo e($c->email); ?></td>
                    <td><?php echo e($c->phone); ?></td>
                    <td><?php echo e($c->address); ?></td>
                    <td>
                        <a href="/pelanggan/edit/<?php echo e($c->id); ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <a href="/pelanggan/delete/<?php echo e($c->id); ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus pelanggan ini?')">
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/hafidzzamzam0206/laravel-sanctum-crud/resources/views/pelanggan/index.blade.php ENDPATH**/ ?>