

<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary mb-3">
    + Tambah Produk
</a>

<h1 class="mb-4">Daftar Produk</h1>

<div class="row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">

                <img src="<?php echo e(asset('images/products/' . $p['image'])); ?>"
                     class="card-img-top"
                     style="height: 200px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title"><?php echo e($p['name']); ?></h5>

                    <p class="card-text text-muted">
                        Rp <?php echo e(number_format($p['price'])); ?>

                    </p>

                    <a href="<?php echo e(route('products.edit', $p['id'])); ?>" 
                       class="btn btn-warning btn-sm me-2">
                       Edit
                    </a>

                    <a href="<?php echo e(route('products.delete', $p['id'])); ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin hapus produk ini?')">
                       Delete
                    </a>
                </div>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('products.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\LaravelProjects\afl1-products\resources\views/products/products.blade.php ENDPATH**/ ?>