<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyectos;
use App\Propuestas;
use App\Tareas;
use App\User;
use App\Evaluaciones;
class Proyecto extends Controller
{
    //
  public function store(Request $request)
  {
      $id= auth()->user()->id;
      $proyecto = new Proyectos;
      $proyecto->nombre=request('nombre');
      $proyecto->descripcion=request('descripcion');
      $proyecto->presupuesto=request('presupuesto');
      $proyecto->categoria=request('categoria');
      $proyecto->tiempoEstimado=request('estimado');
      $proyecto->user_id=$id;
      $proyecto->save();
      return back();
  }
  
  public function interezados($id)
  {
    $titulo="Interezados";
    $propuestas = Propuestas::all()->where('proyecto_id',$id);
    return view('Usuarios.Empresa.Interezados', ["titulo"=>$titulo,"propuestas"=>$propuestas]);
  }
  
  
  public function Actividades($id)
  {
    $titulo="Actividades del proyecto";
    $proyecto=Proyectos::findOrFail($id);
    $tareas=Proyectos::findOrFail($id)->tareas;
    return view('Usuarios.Empresa.actividadesProyecto',["titulo"=>$titulo,"proyecto"=>$proyecto,"tareas"=>$tareas]);
  }
  
  public function Tarea(Request $request,$id)
  {
      $tarea = new Tareas;
      $tarea->nombre=request('nombre');
      $tarea->descripcion=request('descripcion');
      $tarea->proyectos_id=$id;
      $tarea->prioridad=request('prioridad');
      $tarea->fecha=request('fecha');
      $tarea->categoria=request('categoria');
      $tarea->save();
    return back();
  }
  
  public function FinalizarTarea(Request $request,$id)
  {
      $tarea = Tareas::findOrFail($id);
      $tarea->estado="Finalizada";
      $tarea->save();
      return back();
  }
  
  public function FinalizarProyecto($idProyecto,Request $request)
  {
    
    $proyecto = Proyectos::findOrFail($idProyecto);
    $proyecto->estado="Finalizados";
    $proyecto->save();
    $evaluacion = new Evaluaciones;
    $evaluacion->comentario=request('comentario');
    $evaluacion->puntuacion=request('evaluacion');
    $evaluacion->user_id= $proyecto->encargado;
    $evaluacion->proyectos_id=$proyecto->id;
    $evaluacion->save();
    $titulo = "Usuario Empresa";
    //Obtenemos el id del usuario
    $id= auth()->user()->id;
    /*Hacemos una busqueda en el modelo User, llamando a la funcion proyectos que es la relacion del usuario
    a un proyecto y contamos todos los proyectos que tiene el usuario con el estado en espera*/
    $enEspera=User::find($id)->Proyectos()->where('estado','En espera')->count();
    /*Hacemos una busqueda en el modelo User, llamando a la funcion proyectos que es la relacion del usuario
    a un proyecto y contamos todos los proyectos que tiene el usuario con el estado en finalizados*/
    $finalizados=User::find($id)->Proyectos()->where('estado','Finalizados')->count();
    /*Hacemos una busqueda en el modelo User, llamando a la funcion proyectos que es la relacion del usuario
    a un proyecto y contamos todos los proyectos que tiene el usuario con el estado en activos*/
    $activos=User::find($id)->Proyectos()->where('estado','Trabajando')->count();
    //Se hace un array con los datos count obtenidos 
    $estados = array
      ("espera"=>$enEspera,
       "finalizados"=>$finalizados,
       "activos"=>$activos
      );
    //Y se le envia a la vista UsuarioEmpresa con los datos de titulo y los respetivos datos count que se tomaron en un array.
    return view('Usuarios.Empresa.UsuarioEmpresa',["titulo"=>$titulo , "id"=>$id,"estados"=>$estados]);  
  }
}
