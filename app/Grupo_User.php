<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
     ->paginate(12);
     return $activos;
   }
  //Optiene los usuarios que pertenecen a un grupo especifico pero sin ser paginados
   public static function get_users_by_group_task(){
     $activos = Grupo_User::join('users' , 'user_id' , '=' , 'id')
     ->where('codigo_grupo', Auth::user()->grupo_activo)
     ->select('users.id','users.name','users.email','users.avatar' , 'grupo_user.rol')
     ->get();
     return $activos;
   }
   //OBTIENE EL ROL DE UN USUARIO EN UN GRUPO ESPECIFICO
   public static function get_rol($user_id, $codeGroup){
     $user = Grupo_User::where('user_id', $user_id)->where('codigo_grupo', $codeGroup)->first();
     return $user->rol;
   }
   
   //TODDOS LOS GRUPOS DE UN USUARIO
   public static function get_groupsByUser($user){
     $data = DB::table('grupo_user')
                ->join('grupo', 'grupo_user.codigo_grupo', '=', 'grupo.codigo_grupo')
                ->where('grupo_user.user_id', $user)
                ->select( 'grupo.*','grupo_user.*')
                ->paginate(9);
    return $data;
   }
   

   //CREA LOS USUARIOS QUE TIENEN UN GRUPO, EL REGISTRO PARA SABER QUE UN USUARIO TIENE X GRUPO
    public static function Create_UserGroup($user_id, $code, $rol){
      $data = Grupo_User::create([
           'user_id' => $user_id,
           'codigo_grupo' => $code,
           'rol' => $rol,
      ]);
   }


}
