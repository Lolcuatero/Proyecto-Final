<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyectos;
use App\User;
use App\Propuestas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * Procedimiento que lleva a la vista inicio relacionada con la plantilla
     */
    public function index(){
    
        //Se obtienen todos los usuarios y se envian los datos obtenidos a la vista inicio
        $usuarios = User::all();
        return view('Usuarios.Trabajador.inicio',["usuarios"=>$usuarios]);
    }
    
  public function Muro()
  {
    $idUsuario= auth()->user()->id;
    //Se obtienen todos los poryectos en estado de espera
    $proyectos = Proyectos::all()->where('estado','En espera')->where('user_id','<>',$idUsuario);
     return view('muro',["proyectos"=>$proyectos]);
  }
  
  public function propuesta(Request $request,$id)
  {
    //Se obtienen la propuesta 
    $proyecto = Proyectos::find($id);
    //Se busca un usuario
    $usuario = User::find($proyecto->user_id);
    //Se envian los datos
    return view('Usuarios.Trabajador.propuesta', ["proyecto"=>$proyecto,"usuario"=>$usuario]);
  }
  
  public function enviarPropuesta(Request $request,$id)
  {
    //Se obtiene el id de sesion
    $idUsuario= auth()->user()->id;
    //Se hace una nueva propuesta
    $nueva = new Propuestas;
    //Se ingresa la propuesta
    $nueva->propuesta=request('propuesta');
    //Se le asiganan las relaciones
    $nueva->user_id=$idUsuario;
    $nueva->proyecto_id=$id;
    $nueva->proyectos_id=$id;
    //se guarda la propuesta
    $nueva->save();
    //se redireciona a perfil
    return redirect('/Perfil');
  }
}
