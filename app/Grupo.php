<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Grupo extends Model
{
  protected $table = 'grupo';
   protected $fillable = [
    'codigo_grupo','nombre_grupo' ,'descripcion'
   ];

  //Devuelve el grupo activo actual del usuario en sesión.
   public static function get_grupo_name(){
     $group = Grupo::where('codigo_grupo' ,  Auth::user()->grupo_activo)->first();
     return $group;
   }
}
