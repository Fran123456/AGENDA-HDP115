<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Grupo_User;
use Illuminate\Support\Facades\DB;

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
     return $group;
     
   }

   public static function SearchGroups($data){
     $groups =  Grupo::where('codigo_grupo', 'like', '%'.$data.'%')
                    ->orWhere('nombre_grupo', 'like', '%'.$data.'%')
                    ->paginate(20);
    
     foreach ($groups as $key => $value) {
       $aux = Invitacion::verification_Send_(Auth::user()->id, $value->codigo_grupo);
       $aux2 = Grupo_User::where('codigo_grupo', $value->codigo_grupo)->where('user_id', Auth::user()->id)->get();
       $aux2 = count($aux2);
       $info[$key] = $aux + $aux2; 
     }

     $data = array(0=>$groups, 1=> $info);
     return $data;
   }


}
