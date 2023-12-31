

<?php $__env->startSection('title', 'Add Location'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
    <div class="form-container">
        <h1 class="form-title">Add Location</h1>
        <p class="form-description">Tambahkan Data!</p>
        <form action="/location-facilities/add-table" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nomor_urut_meja">Nomor Meja</label>
                <input type="text" id="nomor_urut_meja" name="nomor_urut_meja" required>
            </div>

            <div class="form-group">
                <label for="nama_pemilik">Nama Pemilik</label>
                <input type="text" id="nama_pemilik" name="nama_pemilik" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="Terisi">Terisi</option>
                    <option value="Kosong">Kosong</option>
                </select>
            </div>

            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\teluten-main\teluten-main\resources\views/add-table-location.blade.php ENDPATH**/ ?>