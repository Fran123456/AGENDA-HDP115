<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion_User extends Model
{
   protected $table = 'notificacion_user';
   protected $fillable = [
    'id','notificacion_id','user_id' ,'estado','created_at','updated_at'
   ];

   public static function CreateNotyTask($code, $userId, $status){
     $NotyTask =  Notificacion_User::create([
     'notificacion_id' => $code,
     'user_id' => $userId,
     'estado' => $status,
    ]);
   }

}
