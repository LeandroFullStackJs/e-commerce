<?php $__env->startSection('title', 'DHShop - contacto'); ?>

<?php $__env->startSection('css'); ?>
    <?php echo e('/css/product-detail.css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>
<section class="row product-detail">
  <img class="img-fluid img-thumbnail main-image row col-12 col-md-4" src="/product_img/<?php echo e($Product->image); ?>" alt="">

  
  <article class="col-12 col-md-8 product-info">
    <h2><?php echo e($Product->name); ?></h2>
    <h3>$<?php echo e($Product->price); ?></h3>

    <?php if($Product->stock < 1): ?>
      <div class="stock-div">
        <span class="ofstock">Sin stock</span>
      </div>
      <?php else: ?>

      <div class="stock-div">
        <span class="stock">En stock </span>
      </div>    
      <form action="" method="post">
        <?php echo csrf_field(); ?>
        
        <input type="hidden" value="<?php echo e($Product->id); ?>" name="product_id">
        
        <div>
          <label for="">Cantidad: </label>
          <input type="number" name="quantity" min="1" max="50" value="<?php echo e(old('quantity', '1')); ?>"><br>
        </div>
        
        <?php if($errors->any()): ?>
        <div class="alert alert-danger"> 
          <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <?php endif; ?>
        
        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
      </form>
    <?php endif; ?>

  </article>
</section>

<section class="product-description">
  <h3>Descripcion</h3>
  <p><?php echo e($Product->description); ?></p>
</section>

      

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todofuncionando-master\resources\views/product-detail.blade.php ENDPATH**/ ?>