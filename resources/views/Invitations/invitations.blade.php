@extends('layouts.app')

@section('content')
 <style media="screen">

</style>

  
    @if(session('aceptada'))
        <script type="text/javascript">
            swal("Invitación aceptada", "", "success");
          </script>
    @endif


  <div class="container">
    <div class="row">
     <div class="col-md-12">
       <h2><strong>Invitaciones de grupos</strong></h2>
     </div>
     
   </div>
   <hr>
  </div>

  <div class="container">
  	<div class="row">
  	   <div class="col-md-12">
        @if(count($invitations)>0)
         <ul class="list-group">
               @foreach ($invitations as $key=> $element)
                  <li class="list-group-item">
                    <div class="container-fluid">
                      <div class="row">
                      <div class="col-md-8">
                   <h3>{{$key+1}}. &nbsp<strong>{{$element->nombre_grupo}}  </strong></h3>
                    </div>
                    <div class="col-md-4 text-right">
                      <a class=" btn btn-primary" href="{{route('aceptarSoli', $element->codigo_grupo)}}">Aceptar</a>
                      &nbsp&nbsp&nbsp&nbsp
                      <a class=" btn btn-danger" href="{{route('rechazarSoli', $element->codigo_grupo)}}">Rechazar</a>
                    </div>
                    </div>
                    </div>
                    
                 </li>
               @endforeach
          </ul>
          @else
          <div class="text-center">
            <h3>No hay invitaciones</h3>
          </div>
          @endif
       </div>

  	</div>
  </div>




@endsection
