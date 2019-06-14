<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Notificacion_User;
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

                  $aux = Notificacion_User::where('grupo_id', $group)->where('user_id', $user_id)->get();
                  if(count($aux) > 0){
                     $notifications = DB::table('users')
                     ->join('notificacion_user', 'users.id', '=', 'notificacion_user.user_id')
                     ->join('notificacion', 'notificacion_user.notificacion_id', '=', 'notificacion.codigo_noty')
                     ->where('notificacion_user.user_id', $user_id)->where('notificacion_user.grupo_id', $group)
                     ->select( 'notificacion.*', 'notificacion_user.estado')
                     ->paginate(12);
                  }else{
                    $notifications = array();
                  }
                return $notifications;
   }

   public static function get_Notification($code_noty){
     $noty = Notificacion::where('codigo_noty', $code_noty)->first();
     $owner = User::where('id', $noty->creador)->first();
     $data = array(
       'noty' => $noty, 'owner' => $owner,
     );
     return $data;
   }
}
