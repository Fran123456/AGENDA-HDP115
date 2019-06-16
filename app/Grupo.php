<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Grupo_User;

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


   public static function Create_Group($code, $title, $body, $rol, $user_id){
     $group = Grupo::create([
      'codigo_grupo' => $code,
      'nombre_grupo' =>  $title,
      'descripcion' => $body,
     ]);

     Grupo_User::Create_UserGroup($user_id, $code, $rol);

     
   }

  


}
