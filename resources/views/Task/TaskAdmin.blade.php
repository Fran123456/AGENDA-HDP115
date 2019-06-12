@extends('layouts.app')

@section('content')
  <style media="screen">
    .pa{
      padding-top: 20px;
      padding-bottom: 20px;
    }
  </style>
  <br>
  <div class="container">
    <div class="row">
      @if($rolUserActivo == "Administrador")

        <div class="col-lg-3">
                <div class="contact-box">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset('FUNDAMENTAL/tv_listings.png')}}">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong>Todas las tareas</strong></h3>
                        <a href="{{route('Tasks.index')}}" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-lg-3">
                    <div class="contact-box">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive " src="{{asset('FUNDAMENTAL/sleep_bot.png')}}">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong>Tareas sin iniciar</strong></h3>
                            <a href="" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>


                <div class="col-lg-3">
                        <div class="contact-box">
                            <div class="col-sm-4">
                                <div class="text-center">
                                    <img alt="image" class="img-circle m-t-xs img-responsive " src="{{asset('FUNDAMENTAL/systemmonitor.png')}}">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h3><strong>Tareas en proceso</strong></h3>
                                <a href="" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                            <div class="contact-box">
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <img alt="image" class="img-circle m-t-xs img-responsive " src="{{asset('FUNDAMENTAL/tasks.png')}}">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <h3><strong>Tareas finalizadas</strong></h3>
                                    <a href="" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                                <div class="contact-box">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <img alt="image" class="img-circle m-t-xs img-responsive " src="{{asset('FUNDAMENTAL/falconpro(2).png')}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h3><strong>Tareas no finalizadas</strong></h3>
                                        <a href="" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>


          @else
          <h3>No</h3>

          @endif
    </div>
  </div>




@endsection
