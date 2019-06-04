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
   <h2>Avatars publicos y del grupo: {{$group->nombre_grupo}}</h2>
   <hr>
   <div class="row">

      @foreach ($avatars as $key => $value)
      <div class="col-md-3 col-xs-12 col-xl-3">
                           <div class="ibox">
                               <div class="ibox-content product-box">
                                   <div class="product">
                                       <img height="120" width="120" class="img-circle img-thumbnail" src=" {{$value->avatar_url}}" alt="">
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
                                               <a class="btn btn-warning" href="http://mobile-yetitask.djfrankremixer.com/actualizar-perfil/5">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>Asignar</a>
                                             </div>
                                          @else
                                            <div class="col-xs-6 text-right">
                                               <a class="btn btn-warning" href="http://mobile-yetitask.djfrankremixer.com/actualizar-perfil/5">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>Asignar</a>
                                             </div>
                                             <div class="col-xs-6 text-left">
                                               <form method="POST" action="http://mobile-yetitask.djfrankremixer.com/Perfil/5" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="QRbQRCy6fzepo1PDO3UELsbFxincQaSKQUx2DKkW">
                                                    <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-outline btn-danger">
                                                          <i class="fa fa-trash" aria-hidden="true"></i>Eliminar
                                                    </button>
                                                </form>
                                             </div>
                                          @endif
                                        </div>
                                      </div><br>
                               </div>
                           </div>
       </div>
       @endforeach

       {{$avatars->render()}}

   </div>
 </div>
@endsection
