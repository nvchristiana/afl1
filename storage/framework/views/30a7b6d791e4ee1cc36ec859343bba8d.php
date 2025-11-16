

<?php $__env->startSection('title', 'Tambah Produk'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">Tambah Produk Baru</h1>

    <div class="card p-4 shadow-sm">
        <form action="#" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" placeholder="Masukkan nama produk">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control" placeholder="Masukkan harga">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Produk</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('products.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\LaravelProjects\afl1-products\resources\views/products/create.blade.php ENDPATH**/ ?>