
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
  <!--ESTO ES PARA CUANDO SE AGREGA UN AVATAR NUEVO-->
</div>

  <div class="container">
    <div class="row">
     <div class="col-md-12">
       <h2><strong>Crea tu grupo</strong></h2>
     </div>
    
   </div>
   <hr>
  </div>
 <form action="{{route('Groups.store')}}" method="post">
  {{ csrf_field() }}
  <div class="container">
  	<div class="row">
  		<div class="col-md-6">
        <label>Nombre del grupo:</label>
        <input type="text" name="nombre" required=""  class="form-control">
      </div>
      <div class="col-md-6">
        <label>Codigo:</label>
        <input type="text" readonly="" name="code" value="{{$code}}" required="" class="form-control">
      </div>

      <div class="col-md-12">
        <br>
        <label>Descripcion:</label>
        <textarea name="body" rows="6" class="form-control"></textarea>
      </div>
      <div class="col-md-12">
        <br>
        <input type="submit" name="Crear" class="btn btn-primary">
      </div>
  	</div>
  </div>
</form>
  
@endsection
