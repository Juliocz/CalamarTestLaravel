

<?php $__env->startSection('contenido'); ?>
    <h1>Ocurrio un problema</h1>
    <div class="contenedorperfil">
        <img class="imgperfil" src="<?php echo e(asset('img/erroricon.png')); ?>" alt="error icono">
    </div>
    <h3><?php echo e($msg); ?></h3>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/infolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Users\Julio\Documents\LaravelProjects\calamar\resources\views/error_info.blade.php ENDPATH**/ ?>