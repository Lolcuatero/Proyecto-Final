<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyectos;
use App\Propuestas;

class UsuarioTrabajador extends Controller
{
    //
  public function inicio()
  {
    $id= auth()->user()->id;
    $titulo="Usuario Trabajador";
    $enEspera=Proyectos::all()->where('estado','En espera')->where('encargado',$id)->count();
    $finalizados=Proyectos::all()->where('estado','Finalizados')->where('encargado',$id)->count();
    $activos=Proyectos::all()->where('estado','Trabajando')->where('encargado',$id)->count();
    $estados = array
      ("espera"=>$enEspera,
       "finalizados"=>$finalizados,
       "activos"=>$activos
      );
    $propuestas = Propuestas::all()->where('user_id',$id)->count();
    return view('Usuarios.Trabajador.UsuarioTrabajador',["titulo"=>$titulo,"estados"=>$estados,"propuestas"=>$propuestas]);
  }
  
  public function Enviadas()
  {
    $id= auth()->user()->id;
    $titulo = "Propuestas enviadas";
    $propuestas = Propuestas::all()->where('user_id',$id);
    return view('Usuarios.Trabajador.PropuestasEnviadas',["titulo"=>$titulo, "propuestas"=>$propuestas]);
  }
  
  public function ProyectosActivos()
  {
    $titulo="Proyectos Activos";
    $id= auth()->user()->id;
    $proyectos=Proyectos::all()->where('encargado',$id)->where('estado','Trabajando');
    return view('Usuarios.Trabajador.ProyectosActivos',["titulo"=>$titulo ,"proyectos"=>$proyectos]);
    
  }
  
  public function Finalizados()
  {
    $titulo="Proyectos Finalizados";
    $id= auth()->user()->id;
    $proyectos=Proyectos::all()->where('encargado',$id)->where('estado','Finalizados');
    return view('Usuarios.Trabajador.ProyectosFinalizados',["titulo"=>$titulo ,"proyectos"=>$proyectos]);
    
  }
  
  public function Tareas($id)
  {
    $titulo="Actividades del proyecto";
    $proyecto=Proyectos::findOrFail($id);
    $tareas=Proyectos::findOrFail($id)->tareas;
    return view('Usuarios.Trabajador.actividadesProyecto',["titulo"=>$titulo,"proyecto"=>$proyecto,"tareas"=>$tareas]);
    
  }
}
