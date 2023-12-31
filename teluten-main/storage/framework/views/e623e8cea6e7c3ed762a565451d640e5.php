

<?php $__env->startSection('title', 'Tambah Produk'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="form-container">
        <h1 class="form-title">Edit Location</h1>
        <p class="form-description">Ubah data di bawah ini!</p>
        <form action="<?php echo e(route('table.update', ['id' => $showDataLocation->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="nomor_urut_meja">Nomor Meja</label>
                <input type="text" id="nomor_urut_meja" name="nomor_urut_meja" value="<?php echo e($showDataLocation->nomor_urut_meja); ?>" required>
            </div>

            <div class="form-group">
                <label for="nama_pemilik">Nama Pemilik</label>
                <input type="text" id="nama_pemilik" name="nama_pemilik" value="<?php echo e($showDataLocation->nama_pemilik); ?>" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" value="<?php echo e($showDataLocation->status); ?>">
                    <option value="Terisi">Terisi</option>
                    <option value="Kosong">Kosong</option>
                </select>
            </div>

            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
</div>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\teluten-main\teluten-main\resources\views/edit-table-location.blade.php ENDPATH**/ ?>