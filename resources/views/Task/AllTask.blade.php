@extends('layouts.app')

@section('content')
  <style type="text/css">
    .table-striped > tbody > tr:nth-of-type(2n+1) {
      background-color: white;
    }

    .table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 0px;
}
.product-desc {
    padding-top: 5px;
    padding-right: 10px;
    padding-bottom: 0px;
    padding-left: 10px;
    position: relative;
}

    .a{
      background-color:#E3E7E4;
    }
    .b{
      background-color: #F6E988;
    }
    .c{
      background-color: #ACF5BA;
    }
    .d{
      background-color: #EF9292;
    }
    .pa{
      padding: 20px;
    }


    .container {
    padding-right:0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
  }

  #page-wrapper {
    padding: 0 0px;
    min-height: 568px;
    position: relative !important;
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
       <h2><strong>Todas las tareas en el grupo: {{$group->nombre_grupo}}</strong></h2>
     </div>
     <div class="col-md-6 text-right">
       <a class="btn btn-success" href="{{route('Tasks.create')}}">Agregar tarea</a>
     </div>
   </div>
   <hr>
  </div>

  <div class="container">
    <div class="row">
      @foreach($tasks as $key => $value)
        <div class="col-md-4 col-sm-12 col-xs-12"><br> <br>
          <div class="ibox">
              <div class="ibox-content product-box">
                <div class="product-desc">
                    <span class="product-price">{{$value->titulo}}</span>
                      <div class="m-t text-righ">
                          <div>
                              <table class="table table-responsive">
                                <tbody>
                                  <tr class="text-center">
                                      @if($value->estado == "Inicio")
                                      <td class="a"><h3><span class="label label-default">{{ $value->estado}}</span></h3></td>
                                      @elseif($value->estado == "Proceso")
                                      <td class="b"><h3><span class="label label-warning">{{ $value->estado}}</span></h3></td>
                                      @elseif($value->estado == "Finalizado")
                                      <td class="c"><h3><span class="label label-primary">{{ $value->estado}}</span></h3></td>
                                      @else
                                      <td class="d"><h3><span class="label label-danger">{{ $value->estado}}</span></h3></td>
                                      @endif
                                  </tr>

                                  <tr class="text-center">
                                  <td>
                                    Finaliza:{{ date("d-m-Y",strtotime($value->fecha_fin))}}
                                  </td>
                                  </tr>

                                  <tr>
                                    <td class="text-center">
                                        <a class="btn btn-default btn-xs btn-outline"  href="{{route('changeStart', $value->codigo_tarea)}}"><i class="fa fa-play" aria-hidden="true"></i>   Iniciar </a>
                                    </td>
                                    </tr>
                                    <tr><td class="text-center"> <a class="btn btn-warning btn-xs btn-outline" href="{{route('changeProcess', $value->codigo_tarea)}}"><i class="fa fa-clock-o" aria-hidden="true"></i>  En proceso</a></td>
                                      </tr>
                                    <tr>
                                    <td class="text-center"><a class="btn btn-primary btn-xs btn-outline"  href="{{route('changeFinish', $value->codigo_tarea)}}"><i class="fa fa-check" aria-hidden="true"></i>  Finalizado</a></td>
                                    </tr>


                                    @if($rolUserActivo =="Administrador")
                                        <tr>
                                        <td class="text-center">
                                          <table class="table">
                                            <tr>
                                              <td ><a class="btn btn-lg btn-info btn-circle " href="{{route('Tasks.show',$value->codigo_tarea)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                              <td ><a class="btn btn-lg btn-warning btn-circle " href="{{route('Tasks.edit' , $value->codigo_tarea)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                              <td >{!! Form::open(['route' => ['Tasks.destroy', $value->codigo_tarea], 'method' => 'DELETE']) !!}
                                              <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-lg btn-danger btn-circle ">
                                              <i class="fa fa-trash" aria-hidden="true"></i>
                                              </button>
                                              {!! Form::close() !!}</td>

                                            </tr>
                                          </table>
                                          </td>
                                          </tr>
                                    @endif
                                  </tbody>
                              </table>
                          </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        @endforeach

             <div class="col-md-12">
               {{$tasks->render()}}
             </div>












    </div>
  </div>





@endsection
