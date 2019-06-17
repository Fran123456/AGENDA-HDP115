<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Avatar;
use App\Invitacion;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','grupo_activo','avatar' ,'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function update_avatar($id_avatar){
      $url_avatar = Avatar::where('id_avatar', $id_avatar)->first();
      User::where('id' , Auth::user()->id)
      ->update(['avatar' => $url_avatar->avatar_url]);
    }

    public static function get_user($id){
      $user = user::find($id);
      return $user;
    }

    public static function get_UserByEmailOrName($data, $id){
      $users =  User::where('email', 'like', '%'.$data.'%')
                    ->orWhere('name', 'like', '%'.$data.'%')
                    ->select('users.name','users.avatar','users.email','users.id')->get();
    
    $fin = array();
    foreach ($users as $key => $value) {
        $aux = Invitacion::where('user_id', $value->id)->where('grupo_id', $id)->get();
        if(count($aux) > 0){
            $fin[$key] = 'ya';
        }else
        {
            $fin[$key] = 'no';
        }
    }
                
      $response = array($users, $fin);
      return $response;
    }
}
