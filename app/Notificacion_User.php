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

   public static function change_status($code_noty, $user_id){
      Notificacion_User::where('user_id', $user_id)->where('notificacion_id', $code_noty)->update(['estado' => 'LEIDA']);
   }

   public static function delete_notification_User($user_id, $noty_id){
     Notificacion_User::where('notificacion_id', $noty_id)->where('user_id', $user_id)->delete();
   }

}
