<?php $__env->startSection('content'); ?>

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Tambah Pelanggan</h5>
    </div>

    <div class="card-body">
        <form method="POST" action="/pelanggan">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="address" class="form-control" rows="3"></textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="/pelanggan" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/hafidzzamzam0206/laravel-sanctum-crud/resources/views/pelanggan/create.blade.php ENDPATH**/ ?>