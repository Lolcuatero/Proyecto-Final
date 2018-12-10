<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Materias;
use App\Proyectos;
use App\Propuestas;
use App\Evaluaciones;

class Usuarios extends Controller
{
    //
  //Metodo que regresa la vista para las opciones de usuario empresa
  public function UsuarioEmpresa()
  {
    //Titulo que se le da a la pagina
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
  
  public function ProyectosGuardaros()
  {
    //Se asigna un titulo
    $titulo="Proyectos Guardados";
    //Se obtiene el id del usuario en sesion
    $id= auth()->user()->id;
    //Se buscan los proyectos relacionados al usuario y con el estado en esepera
    $proyectos=Proyectos::all()->where('user_id',$id)->where('estado','En espera');
    //Retornamos una vista con los datos
    return view('Usuarios.Empresa.ProyectosGuardados',["titulo"=>$titulo ,"proyectos"=>$proyectos]);
  }
  
  public function ProyectosActivos()
  {
    //Se asigna un titulo
    $titulo="Proyectos Activos";
    //Se obtiene el id del usuario en sesion
    $id= auth()->user()->id;
    //Se buscan los proyectos relacionados al usuario y con el estado en trabajando
    $proyectos=Proyectos::all()->where('user_id',$id)->where('estado','Trabajando');
    return view('Usuarios.Empresa.ProyectosActivos',["titulo"=>$titulo ,"proyectos"=>$proyectos]);
  }
  
  public function ProyectosFinalizados()
  {
    $titulo="Proyectos Finalizados";
    //Se obtiene el id del usuario en sesion
    $id= auth()->user()->id;
    //Se buscan los proyectos relacionados al usuario y con el estado en finalizados
    $proyectos=Proyectos::all()->where('user_id',$id)->where('estado','Finalizados');
    return view('Usuarios.Empresa.ProyectosActivos',["titulo"=>$titulo ,"proyectos"=>$proyectos]);
  }
  
  public function Perfil()
  {
    //Obtenemos los datos del usuario y los pasamos hacia la vista
    $usuario = User::findOrFail(auth()->user()->id);
    //Se obtienen las evaluaciones del usuario en sesion y se envian a la vista perfil
    $val = Evaluaciones::all()->where('user_id',auth()->user()->id);
    return view('Usuarios.Perfil',["datos"=>$usuario,"val"=>$val]);
  }
  
  //Funcion para editar un usuario
  public function update(Request $request,$id)
  {
    
    //Se obtiene al usuario de los datos registrados con la propiedad find de la clase user
    $usuario = User::find($id);
    if(request('descripcion')!=null)
    {
      $usuario->descripcion=request('descripcion');
    }else
    {
      //Se cambian los datos nuevos enviados desde el formulario del usuario perfil
      $usuario->name=request('nombre');
      $usuario->genero=request('genero');
      $usuario->localidad=request('localidad');
      $usuario->telefono=request('telefono');
      $usuario->twitter=request('twitter');
    
    }
    
    //Y se guardan
    $usuario->save();
    //Se envian nuevamente toda la información del usuario en sesion.
    $usuario = User::findOrFail(auth()->user()->id);
    //Se obtienen las evaluaciones del usuario en sesion y se envian los datos obtenidos a la vista perfil
    $val = Evaluaciones::all()->where('user_id',auth()->user()->id);
    return view('Usuarios.Perfil',["datos"=>$usuario,"val"=>$val]);
    
  }
  
  public function CambiarFoto(Request $request, $id)
  {
    //Se obtiene la peticion request, con el parametro file y se almacena en la carpeta publica en storage
    $request->file('foto')->store('public');
    //Se busca al usuario por el id del parametro de la ruta
       $usuario = User::findOrFail($id);
    //se guarda la ruta de la imagen
       $usuario->foto=$request->file('foto')->store('public');
    //se guardan los cambios
       $usuario->save();
    //se obtienen los datos del usuario
       $usuario = User::findOrFail(auth()->user()->id);
    //Se obtienen las evaluaciones del usuario y se envian ambos datos por la vista
      $val = Evaluaciones::all()->where('user_id',auth()->user()->id);
      return view('Usuarios.Perfil',["datos"=>$usuario,"val"=>$val]);
    
  }
  
  public function AceptarPropuesta(Request $request,$id,$idPropuesta)
  {
    //se busca la propuesta con el id del proyecto
     $propuesta = Propuestas::findOrFail($idPropuesta);
     //Se cambia el estado a aceptada
     $propuesta->estado="Aceptada";
    //Se busca el proyecto y se cambia el estado a trabajado
     $proyecto = Proyectos::findOrFail($propuesta->proyecto_id);
     $proyecto->estado="Trabajando";
    //Se le asigana el id del usuario, como encargado
     $proyecto->encargado=$propuesta->user_id;
    //Se guardan ambos
     $propuesta->save();
     $proyecto->save();
      
     //Titulo que se le da a la pagina
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
  
  public function UsuarioPerfil($id)
  {
    //Se busca el usuario y sus datos
    $usuario = User::findOrFail($id);
    //Se obtienen sus evaluaciones
    $val = Evaluaciones::all()->where('user_id',$id);
    //Se regresan los datos a la vista perfil
    return view('Usuarios.Trabajador.Perfil',["datos"=>$usuario,"val"=>$val]);
  }
  
  
  
  
}
