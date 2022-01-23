<?php

namespace App\Http\Controllers\Datos;

use App\Http\Controllers\Controller;
use App\Models\jugadores;
use Carbon\Carbon;
use Illuminate\Http\Request;
use stdClass;

class DJugadorController extends Controller
{
    protected static $edadMin=7;
    protected static $edadMax=70;
    protected static $rules = [
        "datestart"=>"date_format:Y-m-d",
        "dateend"=>"date_format:Y-m-d",
        "nombre"=> "required|min:2|max:255",
        "apellido"=> "required|min:2|max:255",
        "telefono"=> "required|numeric|digits_between:1,15",
        "fecha_de_nacimiento"=> "required|date_format:Y-m-d|after_or_equal:start_date|before_or_equal:dateend",
        "edad"=>'required|numeric|min:8|max:80',
        "sexo"=>'required|max:20',
        "habilitado"=>'max:20"|regex:(Habilitado|Deshabilitado)'
    ];
    public $validator;//se guarda la validacion para obtener msg
    public $jugador;//se guarda el jugador
    public function __invoke(Request $request){ }
    function __construct(){}
    //valida peticion , devuelve falso o sino devuelve el jugador en modelo listo para guardar en bd
    public function isValidate(Request $request){
        //valida la fecha en un rango con la fecha actual
        $fechaactual=Carbon::now();
        $fechafinal=$fechaactual->subYear(self::$edadMin);//solo podra registrarse mayores o iguales a 7 años
        $fechastart=$fechafinal->subYear(self::$edadMax);//desde 7 a 70 años
        $request->dateend=$fechafinal->format('Y/m/d');
        $request->datestart=$fechastart->format('Y/m/d');

        //valido
        $validator = validator($request->all(), 
        self::$rules
        );
        $this->validator=$validator;
        //si validacion falla devuelve el error
        if($validator->fails())
            return false;
            
            //return $validator->errors()->toJson();
        else return $this->jugador=jugadores::fromRequest($request);
    }


    //-------METODOS PARA RUTAS--------
    /*REGISTRAR
    -Registro, si sale completado, muestra la info del usuario registrado
    */
    public function registrar(Request $request){
        //verifico la validacion de datos
        if(!$this->isValidate($request))
            return $this->validator->errors()->toJson().json_encode($request->all());
            else{
                //si ya existe, aviso que ya existe y no se pudo
                if($this->jugador->isExist()) return view("error_info")->with("msg","El Usuario ya existe");
                else {
                //si todo correcto devuelvo informacion registrado correctamente
                $this->jugador->save();//guardo
                jugadores::asignarNumeros();//genero o refresco numero player
                //return view('jugadorinfo')->with('jugador',$this->jugador);//retorno vista
                return $this->consultar($request);
            }
        }
    }
    //MODIFICAR
    //Por Nombre y Apellido
    public function modificar(Request $request){
        if(!$this->isValidate($request))return $this->validator->errors()->toJson().json_encode($request->all());
        else{
        $jugador=jugadores::isExistFrom($request->oldnombre,$request->oldapellido);
        if(!$jugador) 
        //Si no existe el jugador, retorno error
            return view("error_info")->with("msg","No existe el jugador a modificar");
        else{
        //Si existe modifico retorno informacion del jugador modificado
            $jugador=jugadores::copyTo($request,$jugador);
            $jugador->save();
            return view("jugadorinfo")->with('jugador',$jugador)
            ->with("msg","Se modifico correctamente");
        }
        }
    }

    //CONSULTAR
    //Consultar por Nombre y Apellido
    public function consultar(Request $request){
        $jugador=jugadores::where("apellido",$request->apellido)->where("nombre",$request->nombre)->get()->first();
        if($jugador==null)
        //--Si esta vacio devuelve mensaje
        return "No existe el jugador"; else
        //--Si existe devuelvo la informacion
        return view('jugadorinfo')->with('jugador',$jugador);
                
    }
    //OBTENER TODOS LOS JUGADORES
    public function obtenerTodosJugadores(Request $request){
        $jugadores=jugadores::get();
        return view('jugadorestableinfo')->with('jugadores',$jugadores);
    }

    //OBTIENE TODOS LOS GRUPOS
    public function obtenerTodosGrupos(Request $request){
        return view('jugadores_grupos_info')->with(
            "grupos",
            jugadores::getGroups()
        );
    }

}
