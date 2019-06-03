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
</style>

 <div class="container">
   <h2>Usuarios del grupo: {{$grupo->nombre_grupo}}</h2>
   <hr>
   <div class="row">

     @foreach ($activos as $key => $value)
       <div class="col-md-3">
                           <div class="ibox">
                               <div class="ibox-content product-box">
                                   <div class="product">
                                     <img width="150" high="150" class="img-circle img-thumbnail" src="{{ $value->avatar}}" alt="">
                                   </div>
                                   <div class="product-desc">
                                       <span class="product-price">
                                           {{ $value->name}}
                                       </span>
                                       <small class="text-muted">{{$value->rol}}</small>
                                       <h4>{{ $value->email}}</h4>

                                       <div class="text-center">
                                        <div class="row">
                                          @if ($value->rol == "Administrador")
                                            <div class="col-xs-12 text-center">
                                              <a class="btn btn-warning" href="http://mobile-yetitask.djfrankremixer.com/actualizar-perfil/5">
                                               <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                            </div>
                                           @else
                                             <div class="col-xs-6 text-right">
                                               <a class="btn btn-warning" href="http://mobile-yetitask.djfrankremixer.com/actualizar-perfil/5">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
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
                                      </div>
                                   </div>
                               </div>
                      </div>
              </div>
     @endforeach





   </div>
 </div>
@endsection
