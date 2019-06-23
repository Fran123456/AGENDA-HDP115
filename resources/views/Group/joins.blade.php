@extends('layouts.app')

@section('content')
 <style media="screen">

</style>


    @if(session('send'))
        <script type="text/javascript">
            swal("Invitación enviada", "", "success");
          </script>
    @endif

    @if(session('sed'))
        <script type="text/javascript">
            swal("Usuario aceptado", "", "success");
          </script>
    @endif


  <div class="container">
    <div class="row">
     <div class="col-md-12">
       <h2><strong>Peticiones para unirse al grupo</strong></h2>
     </div>


   </div>
   <hr>
  </div>

  <div class="container">
  	<div class="row">
  	   <div class="col-md-12">
        @if (count($data) >0)
           <ul class="list-group">
               @foreach ($data as $key=> $element)
                  <li class="list-group-item">
                    <div class="col-md-9 col-xm-12">
                        <img height="50" width="50" src="{{$element->avatar}}">&nbsp&nbsp
                       <strong>{{$element->name}} &nbsp&nbsp  {{$element->email}} &nbsp&nbsp </strong>
                    </div>
                    <div class="col-md-3 col-xm-12 text-right">
                    <a class="text-right btn btn-info" href="{{route('acepting', ['id' =>$element->id, 'id2' =>$element->grupo_id, 'id3' => $noty[$key]->notificacion_id])}}">Aceptar</a>

                    </div><br><br><br>
                </li>

               @endforeach
          </ul>
         @else
          <div class="text-center"><h3>No hay peticiones</h3></div>
         @endif
       </div>




  	</div>
  </div>




@endsection
