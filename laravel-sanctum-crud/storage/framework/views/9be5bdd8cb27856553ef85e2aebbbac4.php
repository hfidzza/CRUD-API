<?php $__env->startSection('title', 'Tambah Produk'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Produk</h5>
        </div>

        <div class="card-body">
            <form action="/produk" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="category_id" class="form-select" required>
                    <option value="">-- Pilih --</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea type="number" name="harga" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" class="form-control" name="stock" required>
            </div>

            <div class="d-flex justify-content-end">
                <a href="/produk" class="btn btn-secondary me-2">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/hafidzzamzam0206/laravel-sanctum-crud/resources/views/produk/create.blade.php ENDPATH**/ ?>