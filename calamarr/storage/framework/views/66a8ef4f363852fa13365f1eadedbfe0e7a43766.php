

<?php $__env->startSection('contenido'); ?>
    <h1>INFORMACION</h1>
    <div class="contenedorperfil">
        <img class="imgperfil" src="<?php echo e(asset('img/perfil.jpg')); ?>" alt="muneca">
    </div>
    <?php if(isset($msg)): ?>
    <h3><?php echo e($msg); ?></h3>
    <?php else: ?>
    <h3>Jugador registrado</h3>
    <?php endif; ?>
    <!-- Formulario -->
    <form action="/registrarjugador" class="p-3">
    
      <div class="form-row ">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nombre: <?php echo e($jugador->nombre); ?></label>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Apellido: <?php echo e($jugador->apellido); ?></label>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Telefono: <?php echo e($jugador->telefono); ?></label>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="inputAddress2"
        placeholder="dd-mm-yyyy"
        value="<?php echo e($jugador->fecha_de_nacimiento); ?>">
      </div>

  <div class="form-group">
    <label for="inputAddress">Edad: <?php echo e($jugador->edad); ?>

    </label>
  </div>
  <div class="form-group">
    <label for="inputAddress">Numero de jugador:
      <?php if(isset($jugador->numeroplayer) and $jugador->numeroplayer>=1): ?>
      <?php echo e($jugador->numeroplayer); ?>

      <?php else: ?>
      Aun no asignado
      <?php endif; ?>
    </label>
  </div>
  <div class="form-group">
    <label for="inputAddress">Estado :
      
      <?php if(isset($jugador->habilitado) and $jugador->habilitado=="1"): ?>
      Habilitado
      <?php else: ?>
      No habilitado
      <?php endif; ?>
    </label>
  </div>
  
  <div class="form-group">
      <label for="inputState">Sexo</label>
      <select  id="inputState" class="form-control" required>
        <option selected>
          <?php if($jugador->sexo=="m"): ?>Masculino
         <?php else: ?> Femenino
      <?php endif; ?>
        </option>
      </select>
  </div>

  <a href="/registrarjugador">
  <button class="btn btn-danger">Salir y Registrar nuevo jugador</button>
  </a>
   </form>
   <!-- Formulario end -->

 
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/infolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Users\Julio\Documents\LaravelProjects\calamar\resources\views/jugadorinfo.blade.php ENDPATH**/ ?>