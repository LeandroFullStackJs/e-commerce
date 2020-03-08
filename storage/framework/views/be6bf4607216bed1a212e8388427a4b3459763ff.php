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
<br><br>
    <h1>Formulario de alta de una categoría</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


        <form action="" method="post">
            <?php echo csrf_field(); ?>
            Categoría:
            <br>
            <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
            <br>
            <input class="btn btn-success" type="submit" value="Agregar">
            <input class="btn btn-danger" type="button" value="Volver" onclick="location.href='/adminCategories';">
        </form>

        <a href="/admin" class="btn btn-outline-secondary m-3">Volver a principal</a>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    </html><?php /**PATH C:\xampp\htdocs\todofuncionando-master\resources\views/addCategory.blade.php ENDPATH**/ ?>