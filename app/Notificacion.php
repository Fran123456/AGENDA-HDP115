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

                //  $aux = Notificacion_User::where('grupo_id', $group)->where('user_id', $user_id)->get();
                  $aux = Notificacion_User::where('user_id', $user_id)->get();
                  if(count($aux) > 0){
                     $notifications = DB::table('users')
                     ->join('notificacion_user', 'users.id', '=', 'notificacion_user.user_id')
                     ->join('notificacion', 'notificacion_user.notificacion_id', '=', 'notificacion.codigo_noty')
                     ->where('notificacion_user.user_id', $user_id)
                  //   ->where('notificacion_user.grupo_id', $group)
                     ->select( 'notificacion.*', 'notificacion_user.estado')->orderBy('id_noty','desc')
                     ->paginate(12);
                  }else{
                    $notifications = array();
                  }
                return $notifications;
   }

   public static function get_My_Notifications_Sended($user_id, $group){
          //$aux = Notificacion::where('creador', $user_id)->where('grupo', $group)->paginate(12);
          $aux = Notificacion::where('creador', $user_id)->orderBy('id_noty','desc')->paginate(12);
          return $aux;
   }


   public static function get_Notification($code_noty){
     $noty = Notificacion::where('codigo_noty', $code_noty)->first();
     $owner = User::where('id', $noty->creador)->first();
     $data = array(
       'noty' => $noty, 'owner' => $owner,
     );
     return $data;
   }

   public static function PushNotification($user_id, $group){
    //    $aux = Notificacion_User::where('grupo_id', $group)->orWhere('grupo_id','global')
        $aux = Notificacion_User::where('user_id', $user_id)->where('estado','SIN LEER')->orderBy('id','desc')->get();
                /*  if(count($aux) > 0){
                     $notifications = DB::table('users')
                     ->join('notificacion_user', 'users.id', '=', 'notificacion_user.user_id')
                     ->join('notificacion', 'notificacion_user.notificacion_id', '=', 'notificacion.codigo_noty')

                     ->where('notificacion_user.user_id', $user_id)->where('notificacion_user.grupo_id', $group)->where('notificacion_user.estado','SIN LEER')
                     ->select('users.*', 'notificacion.*', 'notificacion_user.estado')
                     ->get();
                  }else{
                    $notifications = array();
                  }*/

                    if(count($aux) > 0){
                    foreach ($aux as $key => $value) {
                      $data[$key] = DB::table('users')
                     ->join('notificacion', 'users.id', '=', 'notificacion.creador')
                     ->where('notificacion.codigo_noty', $value->notificacion_id)
                     ->select('users.*', 'notificacion.*')
                     ->first();
                    }
                  }else{
                    $data = array();
                  }
                return $data;
   }



}
