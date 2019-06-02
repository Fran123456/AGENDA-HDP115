<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
  protected $table = 'grupo';
   protected $fillable = [
    'codigo_grupo','nombre_grupo' ,'descripcion'
   ];
}
