<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Grupo_User;
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
                ->where('invitacion.user_id', $user)
                ->where('invitacion.estado' ,'pendiente')
                ->select( 'grupo.*','invitacion.*')
                ->paginate(15);
                return $iv;

    }
    //cambia el estado de la invitacion.
    public static function changeStatus($status, $user_id, $code, $rol){
      Invitacion::where('user_id', $user_id)->where('grupo_id', $code)->update(['estado' => $status]);
      //Agregamos al usuario al grupo
      if($status == 'aceptada'){
        Grupo_User::Create_UserGroup($user_id, $code, $rol);
      }
      
    }
}
