<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluaciones extends Model
{
    //
  public function usuario()
  {
    return $this->belongsTo(User::class);
  }
  
  public function proyecto()
  {
    return $this->belongsTo(Proyectos::class);
  }
  
  
}
