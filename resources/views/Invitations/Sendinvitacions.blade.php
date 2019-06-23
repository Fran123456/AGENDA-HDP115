@extends('layouts.app')

@section('content')
 <style media="screen">

</style>

  @if(session('agregado'))

  @endif


  <div class="container">
    <div class="row">
     <div class="col-md-8">
       <h2><strong>Invitaciones para el grupo {{$grupo->nombre_grupo}}</strong></h2>
     </div>
     <div class="col-md-4 text-right">
       <a class="btn btn-primary" href="{{route('Groups.index')}}">Finalizar proceso</a>
     </div>

   </div>
   <hr>
  </div>

  <div class="container">
  	<div class="row">
  		<form action="{{route('Looking-Users', $id)}}" method="get">
         {{ csrf_field() }}
        <div class="col-md-12">
          <label>Nombre:</label>
          <input type="text" required="" name="mail" id="mail" class="form-control">
        </div>
        <div class="col-md-12">
          <br>
          <input type="submit" name="" class="btn btn-primary">
        </div>
      </form>
  	</div>
  </div>




@endsection
