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

.backdoor{
	background-color: red;
}

  </style>

<div>
  <!--ESTO ES PARA CUANDO SE AGREGA UN AVATAR NUEVO-->
  @if(session('agregado'))
  <script type="text/javascript">
      swal("Tarea agregada correctamente", "", "success");
    </script>
  @endif

  @if(session('change'))
  <script type="text/javascript">
      swal("Cambio de grupo realizado con exito", "", "success");
    </script>
  @endif

   @if(session('se'))
  <script type="text/javascript">
      swal("Se ha pedido unirte al grupo correctamente, espera respuesta del administrador", "", "success");
    </script>
  @endif
  <!--ESTO ES PARA CUANDO SE AGREGA UN AVATAR NUEVO-->
</div>






<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  
  <div class="modal-dialog" role="document">
    <form action="{{route('Busca-grupos')}}" method="post" class="">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Busca un grupo</h4>
      </div>
      <div class="modal-body">
        <div class=" " style="padding-bottom: 30px">
          {{ csrf_field() }}
          <div class="col-md-12 text-left">
              <input type="text" placeholder="busca un grupo" name="looking" class="form-control">
          </div>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
    </div>
    </form>
  </div>
</div>
















  <div class="container">
    <div class="row">
     <div class="col-md-9">
       <h2><strong>Tus grupos</strong></h2><br>
     </div>
     <div class="col-md-2 text-right">
       <a class="btn btn-success" href="{{route('Groups.create')}}">Crear grupo</a>
     </div>
     <div class="col-md-1 text-right">
       <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
     </div>
   </div>
   <hr>
  </div>

  <div class="container">
  	<div class="row">
  		@foreach($groups as $key => $value)
  		<div class="col-md-4 col-xs-12 col-xl-4">
             <div class="ibox">
                <div class="ibox-content product-box">
                    
                        <div class="product-desc">
                           <span class="product-price">{{$value->nombre_grupo}}</span>
                         </div>
                          <div class="text-center aa">
                               <h5>Rol: {{$value->rol}}</h5>
                               <h4>{{$value->codigo_grupo}}</h4>
                               @if ($value->codigo_grupo==Auth::user()->grupo_activo)
                               	<h4>Grupo activo</h4>
                               @else
                               <h4>-</h4>
                               @endif
                                  <div class="row">
                                  	@if($value->rol =="Administrador" )
                                    <div class="col-xs-4 text-center">
                                      <a class="btn btn-warning btn-rounded btn-outline" href="">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>Administrar</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                      <a class="btn btn-info btn-rounded btn-outline"  href="{{route('changeGroup', $value->codigo_grupo)}}">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>Seleccionar</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                      <a class="btn btn-danger btn-rounded"  href="{{route('Send-Invitations', $value->codigo_grupo)}}">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>Invitar</a>
                                    </div>
                                    @else
									<div class="col-xs-12 text-center">
                                      <a class="btn btn-warning btn-rounded btn-outline"  href="{{route('changeGroup', $value->codigo_grupo)}}">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>Seleccionar</a>
                                    </div>
                                    @endif
                                  </div>
                                    </div><br>
               </div>
           </div>
       </div>
       @endforeach
       <div class="col-md-12">
       	{{$groups->render()}}
       </div>
  	</div>
  </div>

  
@endsection
