<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alum extends Model
{
    //
  public function Materias()
  {
    return $this->HasMany(Materias::class);
  }
}
