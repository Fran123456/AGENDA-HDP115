<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;

class Tarea_User extends Model
{
   protected $table = 'tareas_usuarios';
   protected $fillable = [
    'id','tarea_id','user_id' ,'grupo_id','created_at','updated_at'
   ];

   public static function Create_TaskUser($code, $userID, $group_id){
     $TaskUser = Tarea_User::create([
      'tarea_id' => $code,
      'user_id' => $userID,
      'grupo_id' => $group_id,
     ]);
   }
  //OBITIENE LOS USUARIOS QUE ESTAN ASOCIADOS A UNA TAREA
   public static function get_users_by_task($code_Task){
     $users = Tarea_User::where('tarea_id', $code_Task)->get();
     $usersCompletes = array();
     foreach ($users as $key => $value) {
       $usersCompletes[$key] = User::get_user($value->user_id);
     }
     return $usersCompletes;
   }//OBITIENE LOS USUARIOS QUE ESTAN ASOCIADOS A UNA TAREA

}
