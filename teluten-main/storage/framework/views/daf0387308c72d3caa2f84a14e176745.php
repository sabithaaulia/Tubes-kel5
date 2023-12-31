<?php $__env->startSection('title', 'Tenant Contract'); ?>

<?php $__env->startSection('content'); ?>
<div class="tenant-contract-container">
    <h2>Formulir Pendaftaran Kontrak Tenant</h2>
    
    <form class="tenant-contract-form">
        <section class="form-section">
            <h3>Profil Pemilik</h3>
            <div class="form-group">
                <label for="restaurant-name">Nama Restoran (Merek)</label>
                <input type="text" id="restaurant-name" name="restaurant-name" required>
            </div>
        </section>

        <section class="form-section">
            <h3>Data Personal</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="owner-name">Nama Pemilik</label>
                    <input type="text" id="owner-name" name="owner-name" required>
                </div>
                <div class="form-group">
                    <label for="owner-phone">Nomor Telepon Pemilik</label>
                    <input type="tel" id="owner-phone" name="owner-phone" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="owner-email">Email Pemilik</label>
                    <input type="email" id="owner-email" name="owner-email" required>
                </div>
                <div class="form-group">
                    <label for="owner-id-type">Jenis Identitas Pemilik</label>
                    <select id="owner-id-type" name="owner-id-type">
                        <option value="ktp">KTP</option>
                        <!-- Other ID types -->
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="owner-id-number">Nomor Identitas Pemilik</label>
                    <input type="text" id="owner-id-number" name="owner-id-number" required>
                </div>
                <div class="form-group">
                    <label for="owner-city">Kota</label>
                    <input type="text" id="owner-city" name="owner-city" required>
                </div>
            </div>

            <div class="form-group">
                <label for="owner-address">Alamat Pemilik</label>
                <input type="text" id="owner-address" name="owner-address" required>
            </div>
        </section>

        <button type="submit" class="submit-button">Submit</button>
    </form>

    <table class="tenant-contract-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Restoran</th>
                <th>Nama Pemilik</th>
                <th>No Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php if(isset($contracts)): ?>
            <?php $__currentLoopData = $contracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($contract->restaurant_name); ?></td>
                <td><?php echo e($contract->owner_name); ?></td>
                <td><?php echo e($contract->owner_phone); ?></td>
                <td>
                    <form action="<?php echo e(route('tenant-contract.destroy', $contract->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="delete-button">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
        <p>No contracts found.</p>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\teluten-main\teluten-main\resources\views/tenant-contract.blade.php ENDPATH**/ ?>