

<?php $__env->startSection('title', 'Edit Product'); ?>

<?php $__env->startSection('content'); ?>

<h1 class="mb-4">Edit Produk #<?php echo e($id); ?></h1>

<div class="card p-4 shadow-sm">
    <form action="<?php echo e(route('products.update', $id)); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text"
                   class="form-control"
                   placeholder="Masukkan nama"
                   value="Contoh Produk <?php echo e($id); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number"
                   class="form-control"
                   value="<?php echo e(rand(5000,25000)); ?>">
        </div>

        <button class="btn btn-primary">Update Produk</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\LaravelProjects\afl1-products\resources\views/products/edit.blade.php ENDPATH**/ ?>