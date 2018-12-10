<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    //
  public function Alumnos()
  {
    return $this->hayMany(Alum::class);
  }
}
