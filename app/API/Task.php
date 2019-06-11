<?php

//HELPER GENERAL
use App\Grupo_User;
use App\Grupo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;

class Task
{

  function __construct()
  {

  }

  public static function rol(){
      $rolUserActivo = Grupo_User::get_rol(Auth::user()->id, Auth::user()->grupo_activo);
      return $rolUserActivo;
  }
  public static function name_group(){
    $group = Grupo::get_grupo_name();
    $name = $group->nombre_grupo;
    return $name;
  }

  public static function personalPaginate($data,$lenght, $route){
        $page = Input::get('page');
        $dataAux = new LengthAwarePaginator($data, count($data), $lenght, $page);
        $dataAux->setPath($route);
        return $dataAux;
  }

}
 ?>
