@extends('layouts.app')

@section('content')

  <style media="screen">
  .product {
    text-align: center;
    padding: 0px 0;
    padding-bottom: 40px;
    padding-top: 15px;
    background-color: #f8f8f9;
    color: #bebec3;
    font-weight: 600;
  }

  .product-desc {
    padding: 0px;
    position: relative;
}

  .aa {
    padding-top: 10px;
    padding-bottom: 0px;

}
  </style>

 <div class="container">
   <div class="row">
     <div class="col-md-8">
       <h2><strong>Avatars publicos y del grupo {{--$group->nombre_grupo--}}</strong></h2>
     </div>
     <div class="col-md-4 text-right">
       <a class="btn btn-success" href="{{route('Avatars.create')}}">Agregar avatar</a>
     </div>
   </div>
   <hr>

      <div>
        <!--ESTO ES PARA CUANDO SE AGREGA UN AVATAR NUEVO-->
        @if(session('agregado'))
        <script type="text/javascript">
            swal("Avatar agregado correctamente", "", "success");
          </script>
        @endif
        <!--ESTO ES PARA CUANDO SE AGREGA UN AVATAR NUEVO-->

        <!--ESTO ES PARA CUANDO SE CAMBIA DE AVATAR EN PERFIL-->
        @if(session('change'))
        <script type="text/javascript">
            swal("Avatar actualizado", "", "success");
          </script>
          <!--ESTO ES PARA CUANDO SE CAMBIA DE AVATAR EN PERFIL-->
        @endif
    </div>




   <div class="row">

      @foreach ($avatars as $key => $value)
      <div class="col-md-3 col-xs-12 col-xl-3">
                           <div class="ibox">
                               <div class="ibox-content product-box">
                                   <div class="product">
                                       <img height="120" width="120" class="img-circle img-thumbnail" src="{{$value->avatar_url}}" alt="">
                                   </div>

                                       <div class="product-desc">
                                         <span class="product-price">
                                            {{$value->nombre}}
                                         </span>
                                        </div>

                                      <div class="text-center aa">
                                        @if ($value->tipo == "publico")
                                          <h5> {{$value->tipo}}</h5>
                                        @else
                                          <h5>Privada</h5>
                                        @endif


                                        <div class="row">
                                          @if ($value->tipo == "publico")
                                            <div class="col-xs-12 text-center">
                                               <a class="btn btn-warning" href="{{route('Update-avatar', $value->id_avatar)}}">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>Asignar</a>
                                             </div>
                                          @else

                                             @if ($rolUserActivo =="Administrador")
                                               <div class="col-xs-6 text-right">
                                                  <a class="btn btn-warning" href="{{route('Update-avatar', $value->id_avatar)}}">
                                                   <i class="fa fa-pencil" aria-hidden="true"></i>Asignar</a>
                                                </div>
                                               <div class="col-xs-6 text-left">
                                                 <form method="POST" action="http://mobile-yetitask.djfrankremixer.com/Perfil/5" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="QRbQRCy6fzepo1PDO3UELsbFxincQaSKQUx2DKkW">
                                                      <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-outline btn-danger">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>Eliminar
                                                      </button>
                                                  </form>
                                               </div>
                                             @else
                                              <div class="col-xs-12 text-center">
                                                <a class="btn btn-warning" href="{{route('Update-avatar', $value->id_avatar)}}">
                                                 <i class="fa fa-pencil" aria-hidden="true"></i>Asignar</a>
                                              </div>
                                             @endif

                                          @endif
                                        </div>
                                      </div><br>
                               </div>
                           </div>
       </div>
       @endforeach

       <div class="col-md-12 text-center">
         {{$avatars->render()}}
       </div>

   </div>
 </div>
@endsection
