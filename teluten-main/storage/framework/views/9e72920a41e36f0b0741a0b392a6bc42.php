<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Default Page Title'); ?></title> <!-- Default title jika section 'title' tidak didefinisikan -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/menu.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/navbar.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/form.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/tenant.css')); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    
    <?php echo $__env->yieldPushContent('head'); ?> <!-- Untuk memungkinkan view anak menambahkan script atau style tambahan di head -->
</head>
<style>
    .oval-button {
        border-radius: 20px;
        margin-bottom: 15px;
    }

    .table {
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th, .table td {
        padding: 12px;
        text-align: center;
    }

    .table th {
        background-color: #f8f9fa;
    }

    .table tbody tr:hover {
        background-color: #f0f0f0;
    }

    .btn-primary, .btn-danger {
        margin-right: 5px;
    }

    .content {
        margin-top: 20px;
    }
</style>

<body>
     <!-- Sertakan Top Navbar -->
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Memastikan bahwa file sidebar.blade.php ada dan benar -->

    <div class="main-content">
        <?php echo $__env->yieldContent('content'); ?> <!-- Tempat untuk isi konten dari view anak -->
    </div>

    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/home.js')); ?>" defer></script>
    <script type="module" src="<?php echo e(asset('js/app.js')); ?>"></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <?php echo $__env->yieldPushContent('scripts'); ?> <!-- Tempat untuk view anak menambahkan script tambahan -->
    
</body>
</html>
<?php /**PATH C:\Users\gaizka\Documents\tugas vincentius gaizka cannavaro\teluten-main\teluten-main\resources\views/app.blade.php ENDPATH**/ ?>