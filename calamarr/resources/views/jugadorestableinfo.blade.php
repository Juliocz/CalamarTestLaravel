
@extends('layout/infolayout')
@section('contenido')
    <h1>Jugadores registrados</h1>
    <div class="contenedorperfil">
        <img class="imgperfil" src="{{asset('img/perfil.jpg')}}" alt="muneca">
    </div>
    <!-- <h3>Jugador registrado</h3> -->
    <!-- Formulario -->
    <form class="p-3 scrolltable">
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
  @foreach ($jugadores as $jugador) 
    <tr>
      <th scope="row">{{$loop->index+1}} </th>
      <td>{{ $jugador->nombre }}</td>
      <td>{{ $jugador->apellido }}</td>
      <td>{{ $jugador->telefono }}</td>
      <td>{{ $jugador->edad }}</td>
      @if($jugador->habilitado==0)<td color="red">No habilitado</td>
      @else <td>Habilitado</td>
      @endif
      <td>{{ $jugador->fecha_de_nacimiento }}</td>
      @if($jugador->numeroplayer<=0)
      <td color="red">No asignado</td>
      @else <td>{{ $jugador->numeroplayer }}</td>
      @endif
    </tr>
    @endforeach 
  </tbody>
</table>
   </form>
   <!-- Formulario end -->

 
   @endsection