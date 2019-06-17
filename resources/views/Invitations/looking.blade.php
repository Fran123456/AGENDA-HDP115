@extends('layouts.app')

@section('content')
 <style media="screen">

</style>

  
    @if(session('send'))
        <script type="text/javascript">
            swal("Invitación enviada", "", "success");
          </script>
    @endif


  <div class="container">
    <div class="row">
     <div class="col-md-8">
       <h2><strong>Invitaciones para el grupo {{$grupo->nombre_grupo}}</strong></h2>
     </div>
     <div class="text-right col-md-4">
       <a class="btn btn-info" href="{{route('Send-Invitations', $id)}}">Atras</a>
     </div>
    
   </div>
   <hr>
  </div>

  <div class="container">
  	<div class="row">
  	   <div class="col-md-12">
        <h3>Resultado de su busqueda:</h3>
        @if (count($users) >0)
           <ul class="list-group">
               @foreach ($users as $key=> $element)
                @if ($element->id == Auth::User()->id)
                 
                @else
                  <li class="list-group-item">
                  <img height="50" width="50" src="{{$element->avatar}}">&nbsp&nbsp 
                  <strong>{{$element->name}} &nbsp&nbsp  {{$element->email}} &nbsp&nbsp </strong>
                  @if ( $res[$key] =='no')
                    <a class="text-left btn btn-info" href="{{ route('sendingInvitation',['id' => $element->id, 'id2' => $id])}}">Invitar</a>
                  @else
                      El usuario no puede ser invitado porque ya pertenece o ya se le envio la invitación.
                  @endif
                </li>
               @endif
               @endforeach
          </ul>
         @else
          <div class="text-center"><h3>No se pudo encontrar lo que buscaba</h3></div>
         @endif
       </div>

  	</div>
  </div>




@endsection
