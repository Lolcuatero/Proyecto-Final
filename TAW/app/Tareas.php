<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    //
  public function proyecto()
  {
    return $this->belongsTo(Proyectos::class);
  }
}
