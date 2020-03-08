<?php $__env->startSection('title', 'DHShop - contacto'); ?>

<?php $__env->startSection('css'); ?>
    <?php echo e('/css/products.css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>

<h2>PRODUCTOS</h2>

      <section class="row products-list">

        <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-container col-12 col-md-4 col-lg-3">
                <a href="products/<?php echo e($Product->id); ?>" class="product">
                    <img class="img-fluid img-thumbnail" src="/product_img/<?php echo e($Product->image); ?>" alt="">
                    <h3 class="product-name"><?php echo e($Product->name); ?></h3>
                    <span class="product-price">$<?php echo e($Product->price); ?></span>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Principal\Desktop\todofuncionando-master\resources\views/products.blade.php ENDPATH**/ ?>