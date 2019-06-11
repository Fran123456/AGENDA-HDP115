<?php

namespace App\API;
//HELPER GENERAL
use App\Grupo_User;
use App\Grupo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;



class PersonalPaginate
{

  function __construct()
  {

  }


  public static function personal($data,$lenght){
      /*  $page = Input::get('page');
        $data = new LengthAwarePaginator($data, count($data), $lenght, $page);
        $data->setPath($route);
        return $data;*/



         $pageName = 'page';

         $page = Paginator::resolveCurrentPage($pageName);

         $data =  new LengthAwarePaginator($data, count($data), $lenght, $page, [
          'path' => Paginator::resolveCurrentPath(),
          'pageName' => $pageName,
          ]);
          return $data;
  }

}
 ?>
