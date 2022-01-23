<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>


<title>Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  <link rel="stylesheet" href="<?php echo e(asset('css/infolayout.css')); ?>">
</head>
</html>

<!-- Fondo -->
<body style="background-image: url('<?php echo e(asset('img/fondoinfo.jpg')); ?>');">
<div class="filterblack"></div>
<!-- Fondo end -->

<!-- Contenedor centrado -->
<div class="contenedor">
    <?php echo $__env->yieldContent('contenido'); ?>
  <!-- Formulario end -->
 </div>
 <!-- Contenedor centrado end -->

 <script src="<?php echo e(asset('js/infolayout.js')); ?>"></script>

</body>
</html><?php /**PATH E:\Users\Julio\Documents\LaravelProjects\calamar\resources\views/layout/infolayout.blade.php ENDPATH**/ ?>