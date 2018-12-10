<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    //
  public function usuario()
  {
    return $this->belongsTo(User::class);
  }
  
  public function propuestas()
  {
    return $this->hasMany(Propuestas::class);
  }
  
  public function tareas()
  {
    return $this->hasMany(Tareas::class);
  }
  
  public function evaluacion()
  {
    return $this->hasMany(Evaluaciones::class);
  }
}
