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
       <h2><strong>Resultados de su busqueda</strong></h2>
     </div>
     <div class="text-right col-md-4">
       <a class="btn btn-info" href="{{route('Groups.index')}}">Atras</a>
     </div>
    
   </div>
   <hr>
  </div>

  <div class="container">
  	<div class="row">
  	   <div class="col-md-12">
        @if (count($groups) >0)
           <ul class="list-group">
               @foreach ($groups as $key=> $element)
                  <li class="list-group-item">
                  {{$key+1}})<strong> &nbsp&nbsp  {{$element->nombre_grupo}} &nbsp&nbsp </strong>
                  {{$element->codigo_grupo}}  
                  <div class="text-right">
                     @if ($res[$key] > 0)
                      <h4>Ya ha pedido unirse a este grupo o ya perteneces al grupo</h4>
                      @else
                      <a href="{{route('askingInvitation', $element->codigo_grupo)}}" class="btn btn-primary">Enviar solicitud</a>
                     @endif
                    
                  </div>
                </li>
               @endforeach
          </ul>
         @else
          <div class="text-center"><h3>No se pudo encontrar lo que buscaba</h3></div>
         @endif
       </div>
       <div class="col-md-12">
         {{$groups->render()}}
       </div>

  	</div>
  </div>




@endsection
