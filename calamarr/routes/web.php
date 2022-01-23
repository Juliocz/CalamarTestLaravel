<?php

use App\Http\Controllers\Datos\DJugadorController;
use App\Models\jugadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isEmpty;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//HOME
Route::get('/', function () {
    return view('home')->with('jugadores',jugadores::obtenerUltimos4());;
});

//registro publico
Route::get('/registrarjugador',function(){return view('registrarjugador');});
//al registrar enviado post
Route::post('/registrarjugador',[DJugadorController::class,"registrar"])->name("registrarjugador");

//modificar jugador
Route::get('/modificarjugador',function(){return view('modificar_jugador');})->name("modificarjugador");
Route::post('/modificarjugador',[DJugadorController::class,"modificar"])->name("modificarjugador");


//Obtener informacion todos los jugadores
Route::get('/jugadores',[DJugadorController::class,"obtenerTodosJugadores"]);
//Obtener informacion jugadores en grupos
Route::get('/grupos',[DJugadorController::class,"obtenerTodosGrupos"])->name('grupos');

//obtener informacion de jugador especifico con nombre y apellido
Route::post('/infojugador',[DJugadorController::class,"consultar"])->name("jugadorinfo");












































/*

Route::get('/infojugador/{nombre}',function (Request $request,$nombre) {
    return $nombre;
    //return $request ->query ('nombre')."-".$request ->query ('apellido');
});

Route::get('/jugadorinfo',function(){

    $jugador=new jugadores();
    $jugador->nombre="Julio";
    $jugador->apellido="llampa";
    $jugador->telefono="12345678";
    $jugador->fecha_de_nacimiento="1995-10-10";
    $jugador->edad=23;
    $jugador->sexo="m";
    $jugador->numeroplayer=0;

    $jugador->save();
    return $jugador;
    //return $jugador;
    //return view('jugadorinfo')->with('jugador',$jugador);
});*/
/*Route::post('/registrarjugador',function(Request $request){
    return $request;
});*/