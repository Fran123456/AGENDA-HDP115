<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Avatar extends Model
{
  protected $table = 'avatar';
   protected $fillable = [
    'id_avatar','avatar_url' ,'tipo'
   ];

 //Obtiene los avatars publicos y los que pertenecen a un grupo especifico
   public static function get_avatars_by_group(){
      $avatars = Avatar::where('tipo', 'publico')
      ->orWhere('tipo' , Auth::user()
      ->grupo_activo)
      ->paginate(10);
      return $avatars;
   }
}
