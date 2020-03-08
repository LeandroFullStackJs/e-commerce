<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:09:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>CRM Admin Panel</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo e(asset('admin-assets/dist/img/ico/favicon.png')); ?>" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="<?php echo e(asset('admin-assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="<?php echo e(asset('admin-assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')); ?>" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="<?php echo e(asset('admin-assets/dist/css/stylecrm.css')); ?>" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>

                    
                    <div class="panel-body">
                        <form action="http://thememinister.com/crm/index.html" method="post" >
                            <div class="form-group">
                            <?php if($errors->any()): ?>
                            <div class="alert alert-danger text-left">
                        <ul class="text-left">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        </div>
                            <?php endif; ?>

                             <?php echo csrf_field(); ?>
                                <label class="control-label" for="username">Username</label>
                                <input value="<?php echo e(old('user')); ?>" class="form-control" type="text" name="user" class="form-control" require>
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="text" name="password" class="form-control" require>
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div>
                            <input type="submit" value="Entrar">
                            </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="<?php echo e(asset('admin-assets/plugins/jQuery/jquery-1.12.4.min.js')); ?>" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="<?php echo e(asset('admin-assets/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:09:03 GMT -->
</html><?php /**PATH C:\xampp\htdocs\todofuncionando-master\resources\views/admin/admin_login.blade.php ENDPATH**/ ?>