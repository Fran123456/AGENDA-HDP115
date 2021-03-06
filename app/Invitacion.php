<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Grupo_User;
use App\Notificacion_User;
use App\Notificacion;
use App\API\code;
use App\API\Noty;

use Illuminate\Support\Facades\Auth;
class Invitacion extends Model
{
    protected $table = 'invitacion';
    protected $fillable = [
    'id_invitacion','user_id','creador' ,'grupo_id','estado','created_at','updated_at'
    ];

      public static function SendInvitation($user_id, $creador, $code, $status){
        $invi = Invitacion::create([
		      'user_id' => $user_id,
		      'creador' =>  $creador,
		      'grupo_id' => $code,
		      'estado' => $status,
		     ]);
    }

    //ontiene las invitaciones
    public static function invitations($user){
       // return Invitacion::where('user_id', $user)->where('estado' ,'pendiente')->paginate(12);

    	$iv = DB::table('invitacion')
                ->join('grupo', 'invitacion.grupo_id', '=', 'grupo.codigo_grupo')
                ->join('users', 'invitacion.creador', '=', 'users.id')
                ->where('invitacion.user_id', $user)
                ->where('invitacion.estado' ,'pendiente')
                ->select( 'grupo.*','invitacion.*', 'users.name', 'users.avatar')
                ->get();
     $response = array();
     $aux = array();
      foreach ($iv as $key => $value) {
       $noty[$key] = Notificacion::where('creador' , $value->creador)->where('grupo' , $value->codigo_grupo)->where('tipo','invitacion')->get();
          foreach ($noty[$key] as $x => $item) {
              $response[$x] = Notificacion_User::where('notificacion_id' , $item->codigo_noty)->where('user_id', Auth::user()->id)->first();
              $Vigelante = isset($response[$x]);
              if($Vigelante == 1){
                $aux[$key] = $response[$x];
              }
          }
      }
      $data = array($iv, $aux);

      return $data;

    }
    //cambia el estado de la invitacion.
    public static function changeStatus($status, $user_id, $code, $rol, $CodeNotyUpdate, $ypeNotyUpdate){
      Invitacion::where('user_id', $user_id)->where('grupo_id', $code)->update(['estado' => $status]);
      $userCreador = Invitacion::where('user_id', $user_id)->where('grupo_id', $code)->first();

      //Agregamos al usuario al grupo
      if($status == 'aceptada' || $status == 'aceptadaAdmin'){
        Grupo_User::Create_UserGroup($user_id, $code, $rol);
       Notificacion::where('codigo_noty',$CodeNotyUpdate)->update(['tipo' => $ypeNotyUpdate]);
      }

      //Enviamos notificacion al que envio la invitacion
    }



    public static function verification_Send_($user_id, $group){
        $aux =Invitacion::where('grupo_id', $group)->where('user_id', $user_id)->get();
        return count($aux);
    }

    //BUSCA
    public static function get_Joins($code){
       $iv = DB::table('invitacion')
                ->join('users', 'invitacion.user_id', '=', 'users.id')
                ->where('invitacion.estado', 'asking')
               ->where('invitacion.grupo_id', $code)
                ->select('users.*','invitacion.*')
                ->get();

                $response = array();
                $aux = array();
                 foreach ($iv as $key => $value) {
                  $noty[$key] = Notificacion::where('creador' , $value->id)->where('grupo' , $value->grupo_id)->where('tipo','asking')->get();
                     foreach ($noty[$key] as $x => $item) {
                         $response[$x] = Notificacion_User::where('notificacion_id' , $item->codigo_noty)->where('user_id', Auth::user()->id)->first();
                         $Vigelante = isset($response[$x]);
                         if ($Vigelante == 1) {
                          $aux[$key] = $response[$x];
                         }
                     }
                 }
                 $data = array($iv, $aux);

                return $data;





    }
}
