    padding-top: 15px;
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

  @if(session('fin'))
  <script type="text/javascript">
      swal("Cambió estado a FINALIZADO correctamente", "", "success");
    </script>
  @endif

  @if(session('proceso'))
  <script type="text/javascript">
      swal("Cambió estado a EN PROCESO correctamente", "", "success");
    </script>
  @endif

  @if(session('inicio'))
  <script type="text/javascript">
      swal("Cambió estado a INICIO correctamente", "", "success");
    </script>
  @endif

  @if(session('eliminado'))
  <script type="text/javascript">
      swal("Tarea eliminada correctamente", "", "success");
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
       <a class="btn btn-success" href="">Crear grupo</a>
     </div>
   </div>
   <hr>
  </div>

  <div class="container">
  	<div class="row">
  		<div class="col-md-6">
        <label>Nombre del grupo:</label>
        <input type="text" name="nombre" required="" class="form-control">
      </div>
      <div class="col-md-6">
        <label>Codigo:</label>
        <input type="text" readonly="" name="code" required="" class="form-control">
      </div>
  	</div>
  </div>

  
@endsection
