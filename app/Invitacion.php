<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Grupo_User;
use App\API\code;
use App\API\Noty;

use Illuminate\Support\Facades\Auth;
class Invitacion extends Model
{
    protected $table = 'invitacion';
    protected $fillable = [
    'id_invitacion','user_id','creador' ,'grupo_id','estado','created_at','updated_at'
    ];

    public static function SendInvitation($user_id, $creador, $code, $status, $title, $msm){
        $invi = Invitacion::create([
		      'user_id' => $user_id,
		      'creador' =>  $creador,
		      'grupo_id' => $code,
		      'estado' => $status,
		     ]);

         $AEnviar = Grupo_User::where('rol', 'Administrador')->where('codigo_grupo', $code)->first();
       
        $codeNoty = Code::__code('Noty');
        $noty= Notificacion::Create_Noty($codeNoty , $title, $msm, $user_id, $code, null, 'askingSoli');
        Notificacion_User::CreateNotyTask($codeNoty , $AEnviar->user_id, 'SIN LEER','global');
    }
    
    //ontiene las invitaciones
    public static function invitations($user){
       // return Invitacion::where('user_id', $user)->where('estado' ,'pendiente')->paginate(12);

    	$iv = DB::table('invitacion')
                ->join('grupo', 'invitacion.grupo_id', '=', 'grupo.codigo_grupo')
                ->where('invitacion.user_id', $user)
                ->where('invitacion.estado' ,'pendiente')
                ->select( 'grupo.*','invitacion.*')
                ->paginate(15);
                return $iv;

    }
    //cambia el estado de la invitacion.
    public static function changeStatus($status, $user_id, $code, $rol){
      Invitacion::where('user_id', $user_id)->where('grupo_id', $code)->update(['estado' => $status]);
      $userCreador = Invitacion::where('user_id', $user_id)->where('grupo_id', $code)->first();

      //Agregamos al usuario al grupo
      if($status == 'aceptada'){
        Grupo_User::Create_UserGroup($user_id, $code, $rol);
        $user = User::where('id',$user_id)->first();
        $grupo=  Grupo::where('codigo_grupo' , $code)->first();
        $title =strtoupper($user->name). " ACEPTO TU SOLICITUD";
        $body= "El usuario: ". $user->name . " ha aceptado la invitación para unirse a tu grupo ". $grupo->nombre_grupo;
        $codeNoty = Code::__code('Noty');
        $noty= Notificacion::Create_Noty($codeNoty , $title, $body, $user_id, $code, null, 'aceptarSoli');
        Notificacion_User::CreateNotyTask($codeNoty , $userCreador->creador, 'SIN LEER','global');
      }

      //Enviamos notificacion al que envio la invitacion
    }


   public static function changeStatusAcepting($status, $user_id, $code, $rol){
   /* Invitacion::where('user_id', $user_id)->where('grupo_id', $code)->update(['estado' => $status]);
      $userCreador = Invitacion::where('user_id', $user_id)->where('grupo_id', $code)->first();

      //Agregamos al usuario al grupo
      if($status == 'aceptada'){
        Grupo_User::Create_UserGroup($user_id, $code, $rol);

        $user = User::where('id',$user_id)->first();
        $grupo=  Grupo::where('codigo_grupo' , $code)->first();
        $title =strtoupper($user->name). " ACEPTO TU SOLICITUD";
        $body= "El usuario: ". $user->name . " ha aceptado la invitación para unirse a tu grupo ". $grupo->nombre_grupo;
        $codeNoty = Code::__code('Noty');
        $noty= Notificacion::Create_Noty($codeNoty , $title, $body, $user_id, $code, null, 'aceptarSoli');
        Notificacion_User::CreateNotyTask($codeNoty , $userCreador->creador, 'SIN LEER','global');
      }*/
   }


    public static function verification_Send_($user_id, $group){
        $aux =Invitacion::where('grupo_id', $group)->where('user_id', $user_id)->get();
        return count($aux);
    }  

    //BUSCA
    public static function get_Joins($code){
       $data = DB::table('invitacion')
                ->join('users', 'invitacion.user_id', '=', 'users.id')
                ->where('invitacion.estado', 'asking')
                ->where('invitacion.grupo_id', $code)
                ->select('users.*','invitacion.*')
                ->paginate(20);

                return $data;

    }
}
