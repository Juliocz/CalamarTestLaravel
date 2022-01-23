<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class jugadores extends Model
{
    use HasFactory;

    //protected $table="cliente";//nombre de la tabla
    protected $primaryKey="id";//ponemos el nombre de la llave primaria esto servira para ejcutar otros metodos despues o consultas
    public $timestamps = false;//para que no se cree columnas tiempo al insertar
    //public $numeroplayer=1;


    //Convierte la peticion a un jugador , listo para ser guardado u otra operacion
    public static function fromRequest(Request $request){
        $jugador=new jugadores();
        $jugador->nombre=$request->nombre;
        $jugador->apellido=$request->apellido;
        $jugador->fecha_de_nacimiento=$request->fecha_de_nacimiento;
        $jugador->telefono=$request->telefono;
        $jugador->edad=$request->edad;
        if($request->sexo=="Masculino")$jugador->sexo="m";
        else $jugador->sexo="f";
        $jugador->numeroplayer=-1;//asigna un numero invalidado, esto se generara automaticamente al crear los grupos
        $jugador->habilitado=1;
        return $jugador;
    }
    //verifica si existe el mismo nombre o apellido
    public function isExist(){
        if(jugadores::where("apellido",$this->apellido)->
                where("nombre",$this->nombre)->get()->isEmpty())
                return false;
        else return true;
    }
    public static function obtenerUltimos4(){
        
        return jugadores::get()->reverse()->take(4);
    }

    //genera los numeros de jugadores o refresca
    public static function asignarNumeros(){
        for($i=0;$i<100;$i++){
            $grupo_edad=jugadores::where('edad','=', $i)->get();
            $index=1;
            foreach($grupo_edad as &$jugador){
                $jugador->numeroplayer=$index;//asigno numero de jugador
                $jugador->save();//guardo o actualizo
                //$jugador->update(["numeroplayer"=>$index]);
                $index++;
            }
        }
    }
    //obtiene grupos por edad y ordenados segun su numeroplayer
    public static function getGroups(){
        $grupos=array();
        for($i=0;$i<100;$i++){
            $grupo_edad=jugadores::where('edad','=', $i)->orderBy('numeroplayer', 'ASC')->get();
            if($grupo_edad->isEmpty())continue;
            array_push($grupos,$grupo_edad);//guardo grupo
        }
        return $grupos;
    }

    //comprueba que existe, devuelve falso, sino devuelve el jugador
    public static function isExistFrom($nombre,$apellido){
        $jugador=jugadores::where("apellido",$apellido)->where("nombre",$nombre)->get();
        if($jugador->isEmpty())return false;
        else return $jugador->first();
    } 

    //copia peticion a jugador
    public static function copyTo(Request $request,$jugador){
        $jugador->nombre=$request->nombre;
        $jugador->apellido=$request->apellido;
        $jugador->fecha_de_nacimiento=$request->fecha_de_nacimiento;
        $jugador->telefono=$request->telefono;
        $jugador->edad=$request->edad;
        if($request->sexo=="Masculino")$jugador->sexo="m";
        else $jugador->sexo="f";
        //verifico si existe parametro por si en dado caso quiero modificar sin eso
        if(isset($request->estado)){
            if($request->estado=="Habilitado")$jugador->habilitado=1;
            else $jugador->habilitado=0;
        }
        return $jugador;
    }
    
}
