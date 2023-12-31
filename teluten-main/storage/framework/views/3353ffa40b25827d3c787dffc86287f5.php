<?php $__env->startSection('title', 'Location & Facilities'); ?>

<?php $__env->startSection('content'); ?>

<div class="content mt-5">
    <div class="px-5">

        <a type="button" href="<?php echo e(url('/location-facilities/add-table')); ?>" class="btn btn-success mb-2">Tambah Meja</a>

        <div class="row row-cols-1">
            <?php if(Session::has('messageAddTable')): ?>
                <div class="alert alert-primary alert-lg"> <?php echo e(Session::get('messageAddTable')); ?></div>
            <?php endif; ?>
            <?php if(Session::has('dataTableUpdate')): ?>
                <div class="alert alert-primary alert-lg"> <?php echo e(Session::get('dataTableUpdate')); ?></div>
            <?php endif; ?>
            <?php if(Session::has('MessageDeleteTable')): ?>
                <div class="alert alert-primary alert-lg"> <?php echo e(Session::get('MessageDeleteTable')); ?></div>
            <?php endif; ?>
            <div class="col">
                <table class="table table-hover table-bordered table-white align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nomor Urut Meja</th>
                            <th>Nama Pemilik</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $dataLocation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($location->nomor_urut_meja); ?></td>
                            <td><?php echo e($location->nama_pemilik); ?></td>
                            <td><?php echo e($location->status); ?></td>
                            <td>
                                <a href="<?php echo e(url('/location-facilities/edit-table/'.$location->id)); ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo e(route('table.delete', ['id' => $location->id])); ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\teluten-main\teluten-main\resources\views/locationfacilities.blade.php ENDPATH**/ ?>