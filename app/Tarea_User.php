<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea_User extends Model
{
   protected $table = 'tareas_usuarios';
   protected $fillable = [
    'id','tarea_id','user_id' ,'created_at','updated_at'
   ];

   public static function Create_TaskUser($code, $userID){
     $TaskUser = Tarea_User::create([
      'tarea_id' => $code,
      'user_id' => $userID,
     ]);
   }

}
