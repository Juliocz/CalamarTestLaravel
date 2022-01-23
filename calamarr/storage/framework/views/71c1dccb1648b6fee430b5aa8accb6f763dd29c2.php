
<?php $__env->startSection('contenido'); ?>
    <h1>REGISTRAR JUGADOR</h1>
    <div class="contenedorperfil">
        <img class="imgperfil" src="<?php echo e(asset('img/perfil.jpg')); ?>" alt="muneca">
    </div>
    <!-- Formulario -->
    <form class="p-3" method="POST">
    <?php echo csrf_field(); ?>
  <div class="form-row ">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input name="nombre" type="text" class="form-control" id="inputEmail4" placeholder="Juan Carlos" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input name="apellido" type="text" class="form-control" id="inputPassword4" placeholder="Perez" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Telefono</label>
    <input name="telefono" type="number" class="form-control" id="inputAddress" placeholder="7777-xxxxx" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Fecha de nacimiento</label>
    <input name="fecha_de_nacimiento"type="date" class="form-control" id="inputAddress2"
    placeholder="dd-mm-yyyy" value="2000-01-01"
        min="1987-01-01" max="2020-12-31"
    required>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Edad</label>
    <input name="edad" type="number" class="form-control" id="inputAddress"  required>
  </div>
    <div class="form-group col-md-6">
      <label for="inputState">Sexo</label>
      <select name="sexo" id="inputState" class="form-control" required>
        <option selected>Masculino</option>
        <option>Femenino</option>
      </select>
    </div>
  </div>
  <button type="submit" value="Submit" class="btn btn-danger" id="submit">Registrar datos</button>
 </form>
  <!-- Formulario end -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/infolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Users\Julio\Documents\LaravelProjects\calamar\resources\views/registrarjugador.blade.php ENDPATH**/ ?>