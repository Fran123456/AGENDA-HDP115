<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificacion';
   protected $fillable = [
    'id_noty','codigo_noty','titulo' ,'cuerpo','creador','grupo','tarea_id','tipo' ,'created_at','updated_at'
   ];

   public static function Create_Noty($code, $title, $body, $owner, $group,$codeTask, $type){
       $noty = Notificacion::create([
         'codigo_noty' => $code,
         'titulo' => $title,
         'cuerpo' => $body,
         'creador' => $owner,
         'grupo' => $group,
         'tarea_id' => $codeTask,
         'tipo' => $type
       ]);
       return $noty;
   }

   public static function get_My_Notifications($user_id, $group){

            $notifications = DB::table('users')
                   ->join('notificacion_user', 'users.id', '=', 'notificacion_user.user_id')
                   ->join('notificacion', 'notificacion_user.notificacion_id', '=', 'notificacion.codigo_noty')
                  ->where('notificacion_user.user_id', $user_id)->where('notificacion_user.grupo_id', $group)
                   ->select( 'notificacion.titulo', 'notificacion.codigo_noty')
                   ->get();

            return $notifications;
   }


}
