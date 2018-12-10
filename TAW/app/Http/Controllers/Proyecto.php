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
    //funcion para guardar un proyecto , primeramente se obtiene el id del usuario en sesion 
      $id= auth()->user()->id;
    //*Luego se hace un nuevo proyecto, se ingresan los datos y se guarda y hace un back a la pagina anterior hacer este proceso*//
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
    //Titulo
    $titulo="Interezados";
    //Se obtienen todas las propuestas de un proyecto y se envian los resultados y el titulo a la vista interezados
    $propuestas = Propuestas::all()->where('proyecto_id',$id);
    return view('Usuarios.Empresa.Interezados', ["titulo"=>$titulo,"propuestas"=>$propuestas]);
  }
  
  
  public function Actividades($id)
  {
    //titulo
    $titulo="Actividades del proyecto";
    //se obtiene un proyecto
    $proyecto=Proyectos::findOrFail($id);
    //se obtienen sus tareas
    $tareas=Proyectos::findOrFail($id)->tareas;
    //se envian los datos obtenidos a la vista 
    return view('Usuarios.Empresa.actividadesProyecto',["titulo"=>$titulo,"proyecto"=>$proyecto,"tareas"=>$tareas]);
  }
  
  public function Tarea(Request $request,$id)
  {
    //se inicializa una nueva tarea  se pasan los campos necesarios se guarda y eventualmente regresa a la pagina anterior
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
    //se cambia el estado de la tarea a finalizada
      $tarea = Tareas::findOrFail($id);
      $tarea->estado="Finalizada";
      $tarea->save();
      return back();
  }
  
  public function FinalizarProyecto($idProyecto,Request $request)
  {
    //se obtiene un proyecto
    $proyecto = Proyectos::findOrFail($idProyecto);
    //se cambia su estado a finalizado
    $proyecto->estado="Finalizados";
    //se guarda
    $proyecto->save();
    //se hace una nueva evaluacion
    $evaluacion = new Evaluaciones;
    //se añade el comentario
    $evaluacion->comentario=request('comentario');
    //se añaden los puntos
    $evaluacion->puntuacion=request('evaluacion');
    //Se le pone el id encargado del proyecto a la relacion
    $evaluacion->user_id= $proyecto->encargado;
    //se guarda el id el proyecto evaluado
    $evaluacion->proyectos_id=$proyecto->id;
    //se guarda la nueva evaluacion
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
  
  public function destroy($id)
  {
    Proyectos::find($id)->delete();
    return back();
  }
}
