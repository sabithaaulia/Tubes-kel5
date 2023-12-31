<?php $__env->startSection('title', 'Tambah Produk'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="form-container">
        <h1 class="form-title">Tambah Produk</h1>
        <p class="form-description">Masukkan informasi produk baru di bawah ini.</p>

        <form action="<?php echo e(route('produk.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="productName">Nama Produk</label>
                <input type="text" id="productName" name="nama_produk" required>
            </div>

            <div class="form-group">
                <label for="productType">Jenis</label>
                <select id="productType" name="jenis_produk">
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                </select>
            </div>

            <div class="form-group">
                <label for="productPrice">Harga</label>
                <input type="number" id="productPrice" name="harga_produk" required>
            </div>

            <div class="form-group">
                <label for="productQuantity">Jumlah</label>
                <input type="number" id="productQuantity" name="jumlah_produk" required>
            </div>

            <button type="submit" class="submit-button">Tambahkan</button>
        </form>
    </div>
</div>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\teluten-main\teluten-main\resources\views/edit.blade.php ENDPATH**/ ?>