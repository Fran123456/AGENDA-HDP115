<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Grupo_User extends Model
{
  protected $table = 'grupo_user';
   protected $fillable = [
    'id_grupo_user','user_id','codigo_grupo' ,'rol'
   ];

  //Optiene los usuarios que pertenecen a un grupo especifico
   public static function get_users_by_group(){
      $activos = Grupo_User::join('users' , 'user_id' , '=' , 'id')
     ->where('codigo_grupo', Auth::user()->grupo_activo)
     ->select('users.name','users.email','users.avatar' , 'grupo_user.rol')
     ->paginate(10);
     return $activos;
   }
  //Optiene los usuarios que pertenecen a un grupo especifico pero sin ser paginados
   public static function get_users_by_group_task(){
     $activos = Grupo_User::join('users' , 'user_id' , '=' , 'id')
     ->where('codigo_grupo', Auth::user()->grupo_activo)
     ->select('users.name','users.email','users.avatar' , 'grupo_user.rol')
     ->get();
     return $activos;
   }
}
