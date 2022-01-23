
@extends('layout/infolayout')
@section('contenido')
    <h1>Ocurrio un problema</h1>
    <div class="contenedorperfil">
        <img class="imgperfil" src="{{asset('img/erroricon.png')}}" alt="error icono">
    </div>
    <h3>{{$msg}}</h3>
   @endsection