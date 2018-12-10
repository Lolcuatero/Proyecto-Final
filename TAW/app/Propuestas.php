<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuestas extends Model
{
    //
  public function proyecto()
  {
    return $this->belongsTo(Proyectos::class);
  }
}
