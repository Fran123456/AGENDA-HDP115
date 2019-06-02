<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo_User extends Model
{
  protected $table = 'grupo_user';
   protected $fillable = [
    'id_grupo_user','user_id','codigo_grupo' ,'rol'
   ];
}
