<?php

namespace App\Http\Controllers;
use App\Alum;
use App\Materias;
use Illuminate\Http\Request;

class AlumController extends Controller
{
    //
   public function index()
  {
     $datos=Alum::all();
    return view('index',["datos"=>$datos]);
  }
  
  public function store(Request $request)
  {
    $nuevo = new Alum;
    $nuevo->nombre=request('nombre');
    $nuevo->apellido=request('apellido');
    $nuevo->save();
    $datos=Alum::all();
    return view('index',["datos"=>$datos]);
  }
  
  public function show($id)
  {
    $alumno= Alum::findOrFail($id);
    $materias = Alum::findOrFail($id)->Materias;
    return view('perfil',["datos"=>$alumno,"materias"=>$materias]);
  }
  
  public function destroy(Request $request,$id)
  {
    $alumno=Alum::find($id);
    $alumno->delete();
    $datos=Alum::all();
    return view('index',["datos"=>$datos]);
  }
  
  public function edit(Request $request,$id)
  {
    $alumno = Alum::find($id);
    
    return view('editar',["datos"=>$alumno]);
  }
  
  public function update($id)
  {
      $alumno = Alum::find($id);
      $alumno->nombre=request('nombre');
      $alumno->apellido=request('apellido');
      $alumno->save();
      $datos=Alum::all();
      return view('index',["datos"=>$datos]);
  }
}
