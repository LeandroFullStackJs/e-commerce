<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo e(asset('front_assets/images/favicon.ico')); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo e(asset('front_assets/images/apple-touch-icon.png')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/bootstrap.min.css')); ?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/style.css')); ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/responsive.css')); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/custom.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<body>

 <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1>Panel de administración de clientes</h1>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver a principal</a>

    <table class="table table-stripped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>imagen de perfil</th>
                <th>Fecha de nacimiento</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th colspan="2"></th>
              </tr>
        </thead>
    <tbody>
        
        <?php $__currentLoopData = $Customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($Customer->id); ?></td>
                <td><?php echo e($Customer->first_name); ?></td>
                <td><?php echo e($Customer->last_name); ?></td>
                <td><?php echo e($Customer->email); ?></td>
                <td><img class="img-fluid img-thumbnail main-image" src="user_img/<?php echo e($Customer->image); ?>" alt=""></td>
                <td><?php echo e($Customer->birthdate); ?></td>
                <td><?php echo e($Customer->phone); ?></td>
                <td><?php echo e($Customer->address); ?></td>
                <td><a href="deleteCustomer/<?php echo e($Customer->id); ?>" class="btn btn-outline-secondary">eliminar</a></td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </tbody>
    </table>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver a principal</a>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="<?php echo e(asset('front_assets/js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/bootstrap.min.js')); ?>"></script>
<!-- ALL PLUGINS -->
<script src="<?php echo e(asset('front_assets/js/jquery.superslides.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/bootstrap-select.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/inewsticker.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/bootsnav.js.')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/images-loded.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/isotope.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/baguetteBox.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/form-validator.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/contact-form-script.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/custom.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\todofuncionando-master\resources\views/adminCustomers.blade.php ENDPATH**/ ?>