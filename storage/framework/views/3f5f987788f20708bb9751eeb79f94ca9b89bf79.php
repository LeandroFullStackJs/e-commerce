<?php $__env->startSection('title', 'DHShop - Perfil'); ?>

<?php $__env->startSection('css'); ?>
    <?php echo e('/css/profile.css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<section class="user row">
  <article class="user-info col-12 row">
    <form class="col-12 col-md-8 row" action="" method="post" enctype="multipart/form-data">
      <fieldset class="row col-12">
        <h2>Datos de mi cuenta</h2>
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($User->id); ?>">

        <!-- EMAIL -->
        <div class="form-group">
          <label for="email">E-Mail</label>
          <input type="text" id="email" name="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('email', $User->email)); ?>">
          <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>

        <!-- CONTRASEÑA -->
        <div class="form-group">
          <label for="password">Cambiar contraseña</label>
          <input type="password" id="password" name="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="**********">
            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>

        <!-- RE CONTRASEÑA -->
        <div class="form-group re-pass">
          <label for="repassword">Reingrese contraseña</label>
          <input type="password" id="repassword" name="password_confirmation" class="form-control" placeholder="**********">
        </div>

        <!-- Foto de perfil -->
        <div class="form-group">
          <label for="img">Foto de perfil</label> <br>
          <input name="image" type="file" id="img">
        </div>

        <h2>Datos personales</h2>

        <!-- NOMBRE -->
        <div class="form-group">
            <label for="first_name">Nombre</label>
            <input type="text" id="first_name" name="first_name" class="form-control <?php if ($errors->has('first_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('first_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('first_name', $User->first_name)); ?>">
            <?php if ($errors->has('first_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('first_name'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> 
        </div>


        <!-- APELLIDO -->
        <div class="form-group">
          <label for="last_name">Apellido</label>
          <input type="text" id="last_name" name="last_name" class="form-control <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('last_name', $User->last_name)); ?>">
            <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> 
        </div>

        <!-- DNI -->
        <div class="form-group">
          <label for="dni">Documento</label>
          <input type="text" id="dni" name="dni" class="form-control <?php if ($errors->has('dni')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dni'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('dni', $User->dni)); ?>">
            <?php if ($errors->has('dni')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dni'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> 
        </div>

        <!-- FECHA DE NACIMIENTO -->
        <div class="form-group">
          <label for="birthdate">Fecha de nacimiento</label>
          <input type="date" id="birthdate" name="birthdate" class="form-control <?php if ($errors->has('birthdate')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('birthdate'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('birthdate', $User->birthdate)); ?>">
            <?php if ($errors->has('birthdate')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('birthdate'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> 
        </div>

        <!-- TELEFONO -->
        <div class="form-group">
          <label for="phone">Telefono</label>
          <input type="text" id="phone" name="phone" class="form-control <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('phone', $User->phone)); ?>">
            <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> 
        </div>

        <!-- DIRECCION -->
        <div class="form-group">
          <label for="address">Direccion</label>
          <input type="text" id="address" name="address" class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('address', $User->address)); ?>">
            <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> 
        </div>



      </fieldset>

      <!-- BOTONES -->
      <div class="button-container col-12">
        <button type="submit" id="btn-edit" class="btn btn-primary">Guardar Datos</button>
      </div>

    </form>
    <div class="col-12 col-md-4 imgAndHistory-container">
        <img class="img-fluid img-thumbnail" id="profileimg" src="user_img/<?php echo e($User->image); ?>" alt="">
        <br>
        <a href="/history">Ver historial de compras</a><br>

        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar sesión
        </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
  </article>
</section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todofuncionando-master\resources\views//profile.blade.php ENDPATH**/ ?>