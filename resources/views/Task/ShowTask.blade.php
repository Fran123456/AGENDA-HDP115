@extends('layouts.app')

@section('content')
  <style type="text/css">
    .bordes{
      border: solid 1px #4ACC9F;
      margin-left: 10px;
      margin-right: 10px;
    }
    .espacios{
       margin-top: 10px;
      margin-bottom: 10px;
    }
    .ibox-content {
    background-color: #ffffff;
    color: inherit;
    padding: 5px 5px 5px 5px;
    border-color: #e7eaec;
    border-image: none;
    border-style: solid solid none;
    border-width: 1px 0;
}
  </style>

<div class="container">
    <div class="wrapper wrapper-content">
          <div class="row">
              <div class="col-md-12">
                   <div class="ibox float-e-margins">
                      <div class="ibox-title"><h5><i class="fa fa-thumb-tack" aria-hidden="true"></i>TAREA</h5>
                        <div class="ibox-tools">
                                <a href="" ><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                      </div>

                        <div class=" animated fadeInRight">
                                      <div class="mail-box">
                                              <div class="mail-attachment">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">
                                                                <h4>{{$Task->titulo}}</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                            {!!$Task->cuerpo!!}
                                                            </div>
                                                            <div class="panel-footer">
                                                            Fecha finalización: {{ date("d/m/Y", strtotime($Task->fecha_fin))}}
                                                            </div>
                                                            <div class="panel-footer">
                                                              <strong>Estado:</strong><span class="label label-default">{{$Task->estado}}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <strong>Asigno tarea: &nbsp;</strong> <img width="30px" height="30px" alt="image" class="img-circle" src="{{$UserAsigment->avatar}}">
                                                                {{$UserAsigment->name}}
                                                            </div>
                                                        </div>

                                                        <div class=""><h4> INTEGRANTES</h4>
                                                            <div class="container">
                                                                <div class="row">
                                                                  @foreach ($arrayUsers as $key => $value)
                                                                    <div class="col-md-3 bordes">
                                                                          <div class="espacios text-center">
                                                                              <h5 class="">{{$value->name}}</h5>
                                                                              <img width="50px" height="50px" alt="image" class="img-circle" src="{{$value->avatar}}">
                                                                          </div>
                                                                          <div class="ibox-content text-center">
                                                                          <span>{{$value->email}}<br></span>
                                                                          </div>
                                                                    </div>
                                                                  @endforeach

                                                                </div>
                                                              </div>
                                                        </div>
                                                </div>
                                            <div class="clearfix"></div>
                                        </div>
                            </div>
                    </div>
                </div>
      <!--AQUI VA EL CONTENIDO-->
                </div>
    </div>
</div><!--DIV CONTAINER-->

@endsection
