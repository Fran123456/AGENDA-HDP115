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
<script src="{{asset('ckeditor/ckeditor.js')}}">
</script>

<div>
  <!--ESTO ES PARA CUANDO SE AGREGA UN AVATAR NUEVO-->
  @if(session('agregado'))
  <script type="text/javascript">
      swal("Tarea agregada correctamente", "", "success");
    </script>
  @endif

 

  <!--ESTO ES PARA CUANDO SE AGREGA UN AVATAR NUEVO-->
</div>

  <div class="container">
    <div class="row">
     <div class="col-md-6">
       <h2><strong>Tus grupos</strong></h2>
     </div>
     <div class="col-md-6 text-right">
       <a class="btn btn-success" href="{{route('Groups.create')}}">Crear grupo</a>
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
                                    <div class="col-xs-6 text-center">
                                      <a class="btn btn-warning btn-rounded btn-outline" href="">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>Administrar</a>
                                    </div>
                                    <div class="col-xs-6 text-center">
                                      <a class="btn btn-info btn-rounded btn-outline"  href="">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>Seleccionar</a>
                                    </div>
                                    @else
									<div class="col-xs-12 text-center">
                                      <a class="btn btn-warning btn-rounded btn-outline"  href="">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>Administrar</a>
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
