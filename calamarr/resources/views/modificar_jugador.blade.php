@extends('layout/infolayout')
@section('contenido')
    <h1>Modificar</h1>
    <div class="contenedorperfil">
        <img class="imgperfil" src="{{asset('img/perfil.jpg')}}" alt="muneca">
    </div>
    <!-- Formulario -->
    <form class="p-3" method="POST">
    @csrf
    <h5>Jugador a modificar:</h5>
    <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Nombre:</label>
    <input name="oldnombre" type="text" class="form-control" id="inputAddress"  required>
  </div>
    <div class="form-group col-md-6">
      <label for="inputState">Apellido:</label>
      <input name="oldapellido" type="text" class="form-control" id="inputAddress"  required>
    </div>
  </div>
  <h3>Nuevos datos: </h3>
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
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Telefono</label>
    <input name="telefono" type="number" class="form-control" id="inputAddress" placeholder="7777-xxxxx" required>
  </div>
    <div class="form-group col-md-6">
      <label for="inputState">Estado: </label>
      <select name="estado" id="inputState" class="form-control" required>
        <option selected>Habilitado</option>
        <option>Deshabilitado</option>
      </select>
    </div>
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
  <button type="submit" value="Submit" class="btn btn-danger" id="submit">Modificar datos</button>
 </form>
  <!-- Formulario end -->
 @endsection