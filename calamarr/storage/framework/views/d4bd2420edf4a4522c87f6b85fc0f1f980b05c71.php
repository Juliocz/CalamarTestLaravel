

<?php $__env->startSection('contenido'); ?>
    <h1>Jugadores registrados</h1>
    <div class="contenedorperfil">
        <img class="imgperfil" src="<?php echo e(asset('img/perfil.jpg')); ?>" alt="muneca">
    </div>
    <!-- <h3>Jugador registrado</h3> -->
    <!-- Formulario -->
    <form class="p-3 scrolltable">
    <?php $__currentLoopData = $grupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jugadores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <h2>GRUPO: <?php echo e($loop->index+1); ?> EDAD: <?php echo e($jugadores[0]->edad); ?></h2>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Edad</th>
      <th scope="col">Estado</th>
      <th scope="col">Fecha nac.</th>
      <th scope="col">Num-Player.</th>
    </tr>
  </thead>
  
  <tbody>
  <?php $__currentLoopData = $jugadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jugador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <tr>
      <th scope="row"><?php echo e($loop->index+1); ?> </th>
      <td><?php echo e($jugador->nombre); ?></td>
      <td><?php echo e($jugador->apellido); ?></td>
      <td><?php echo e($jugador->telefono); ?></td>
      <td><?php echo e($jugador->edad); ?></td>
      <?php if($jugador->habilitado==0): ?><td color="red">No habilitado</td>
      <?php else: ?> <td>Habilitado</td>
      <?php endif; ?>
      <td><?php echo e($jugador->fecha_de_nacimiento); ?></td>
      <?php if($jugador->numeroplayer<=0): ?>
      <td color="red">No asignado</td>
      <?php else: ?> <td><?php echo e($jugador->numeroplayer); ?></td>
      <?php endif; ?>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </tbody>
</table>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
   </form>
   <!-- Formulario end -->

 
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/infolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Users\Julio\Documents\LaravelProjects\calamar\resources\views/jugadores_grupos_info.blade.php ENDPATH**/ ?>