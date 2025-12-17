<?php $__env->startSection('content'); ?>

<div class="card shadow-sm">
    <div class="card-header bg-warning">
        <h5 class="mb-0">Edit Pelanggan</h5>
    </div>

    <div class="card-body">
        <form method="POST" action="/pelanggan/update/<?php echo e($customer->id); ?>">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name"
                       class="form-control"
                       value="<?php echo e($customer->name); ?>"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email"
                       class="form-control"
                       value="<?php echo e($customer->email); ?>"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="phone"
                       class="form-control"
                       value="<?php echo e($customer->phone); ?>"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="address"
                          class="form-control"
                          rows="3"><?php echo e($customer->address); ?></textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="/pelanggan" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-warning">Update</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/hafidzzamzam0206/laravel-sanctum-crud/resources/views/pelanggan/edit.blade.php ENDPATH**/ ?>