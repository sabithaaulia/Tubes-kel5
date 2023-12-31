<?php $__env->startSection('title', 'Menu'); ?>

<?php $__env->startSection('content'); ?>
<table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><?php echo e($item->nama_produk); ?></td>
                    <td>Rp. <?php echo e(number_format($item->harga_produk, 0, ',', '.')); ?></td>
                    <td><?php echo e($item->jumlah_produk); ?></td>
                    <td>
                        <button class="edit-button" onclick='openEditModal(<?php echo json_encode($item, 15, 512) ?>)'>Edit</button>
                        <button class="delete-button" onclick='deleteProduct(<?php echo e($item->id); ?>)'>Hapus</button>
                        <button class="add-to-cart-button" data-product-id="<?php echo e($item->id); ?>" onclick="addToCart(this)">🛒</button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

                <!-- Modal Edit Produk -->
        <div id="editProductModal" class="modal" style="display:none;">
            <div class="modal-content">
                <span class="close" onclick="closeEditModal()">&times;</span>
                <h2>Edit Produk</h2>
                <form method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" id="editProductId" name="id">
                    
                    <div class="form-group">
                        <label for="editProductName">Nama Produk</label>
                        <input type="text" id="editProductName" name="nama_produk" required>
                    </div>

                    <div class="form-group">
                        <label for="editProductType">Jenis</label>
                        <select id="editProductType" name="jenis_produk">
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="editProductPrice">Harga</label>
                        <input type="text" id="editProductPrice" name="harga_produk" required>
                    </div>

                    <div class="form-group">
                        <label for="editProductQuantity">Jumlah</label>
                        <input type="number" id="editProductQuantity" name="jumlah_produk" required>
                    </div>

                    <button type="submit" class="submit-button">Update</button>
                </form>
            </div>
        </div>

    </div>
</div>


    <button class="order-button">Buat Pesanan</button>
    </div>

    
<?php if(session('cart')): ?>
    <div class="order-cart">
        <h3>Order Menu</h3>
        <p>Order No. 16</p>
        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productId => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_array($details) && isset($details['name'], $details['price'], $details['quantity'])): ?>
                <div class="menu-item">
                    <p class="item-name"><?php echo e($details['name']); ?></p>
                    <p class="item-price"><?php echo e('Rp. ' . number_format($details['price'], 2, ',', '.')); ?></p>
                    <div class="item-controls">
                        <button class="minus-button" onclick="updateCart(<?php echo e($productId); ?>, <?php echo e(max($details['quantity'] - 1, 0)); ?>)">-</button>
                        <input type="text" class="quantity-input" value="<?php echo e($details['quantity']); ?>">
                        <button class="plus-button" onclick="updateCart(<?php echo e($productId); ?>, <?php echo e($details['quantity'] + 1); ?>)">+</button>
                        <button class="delete-button" onclick="removeFromCart(<?php echo e($productId); ?>)">Delete</button>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button class="order-button" onclick="completeOrder()">Complete Order</button>
    </div>
<?php endif; ?>

  

    


<!-- Modal Pembayaran -->
<div id="paymentModal" class="modal">
<div class="payment-modal">
  <div class="payment-modal-header">
    <i class="your-icon-class"></i> <!-- Replace with your actual icon class -->
    <span>Total Pesanan</span>
  </div>
  <div class="payment-modal-body">
        <div class="payment-modal-field">
                    <label for="total">Total Pesanan</label>
                    <input type="text" id="total" value="Rp.32.000" readonly>
                    </div>
                    <div class="payment-modal-field">
                    <label for="paid">Dibayar</label>
                    <input type="text" id="paid" value="Rp.50.000" readonly>
                    </div>
                    <div class="payment-modal-field">
                    <label for="change">Kembalian</label>
                    <input type="text" id="change" value="Rp.18.000" readonly>
                    </div>
                </div>
                <div class="payment-modal-actions">
                    <button class="payment-modal-action-button payment-modal-action-button--pay" onclick="confirmPayment()">Bayar</button>
                    <button class="payment-modal-action-button payment-modal-action-button--cancel"onclick="closePaymentModal()">Batal</button>
                </div>
        </div>

</div>


        
<!-- Modal Konfirmasi Pembayaran Berhasil -->
<div id="successModal" class="modal">
    <div class="modal-content">
        <div class="modal-payment-success">
            <div class="checkmark-icon">✓</div>
            <h2>Pembayaran Berhasil!</h2>
            <div class="payment-details">
                <p>Order #16</p>
                <p>Total Rp.32.000</p>
                <p>Jumlah Uang Rp.50.000</p>
                <p>Kembalian Rp.18.000</p>
            </div>
            <button onclick="closeSuccessModal()">Home</button>
            <button onclick="printReceipt()">Print</button>
    </div>

    </div>
</div>

</div>

</div>

<?php $__env->startPush('head'); ?>
<link href="<?php echo e(asset('css/menu.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('js/menu.js')); ?>"></script>
<script type="module" src="<?php echo e(asset('js/app.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\teluten-main\teluten-main\resources\views/menu.blade.php ENDPATH**/ ?>