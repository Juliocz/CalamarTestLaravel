
@extends('layout/infolayout')
@section('contenido')
    <h1>INFORMACION</h1>
    <div class="contenedorperfil">
        <img class="imgperfil" src="{{asset('img/perfil.jpg')}}" alt="muneca">
    </div>
    @if(isset($msg))
    <h3>{{$msg}}</h3>
    @else
    <h3>Jugador registrado</h3>
    @endif
    <!-- Formulario -->
    <form action="/registrarjugador" class="p-3">
    
      <div class="form-row ">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nombre: {{$jugador->nombre}}</label>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Apellido: {{$jugador->apellido}}</label>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Telefono: {{$jugador->telefono}}</label>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="inputAddress2"
        placeholder="dd-mm-yyyy"
        value="{{$jugador->fecha_de_nacimiento}}">
      </div>

  <div class="form-group">
    <label for="inputAddress">Edad: {{$jugador->edad}}
    </label>
  </div>
  <div class="form-group">
    <label for="inputAddress">Numero de jugador:
      @if(isset($jugador->numeroplayer) and $jugador->numeroplayer>=1)
      {{$jugador->numeroplayer}}
      @else
      Aun no asignado
      @endif
    </label>
  </div>
  <div class="form-group">
    <label for="inputAddress">Estado :
      
      @if(isset($jugador->habilitado) and $jugador->habilitado=="1")
      Habilitado
      @else
      No habilitado
      @endif
    </label>
  </div>
  
  <div class="form-group">
      <label for="inputState">Sexo</label>
      <select  id="inputState" class="form-control" required>
        <option selected>
          @if ($jugador->sexo=="m")Masculino
         @else Femenino
      @endif
        </option>
      </select>
  </div>

  <a href="/registrarjugador">
  <button class="btn btn-danger">Salir y Registrar nuevo jugador</button>
  </a>
   </form>
   <!-- Formulario end -->

 
   @endsection