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


      <div class="col-lg-3">
              <div class="contact-box">
                  <div class="col-sm-4">
                      <div class="text-center">
                          <img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset('FUNDAMENTAL/tv_listings.png')}}">
                      </div>
                  </div>
                  <div class="col-sm-8">
                      <h3><strong>Todas mis tareas</strong></h3>
                      <a href="{{route('My-Tasks')}}" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                  </div>
                  <div class="clearfix"></div>
              </div>
          </div>


           <div class="col-lg-3">
                  <div class="contact-box">
                      <div class="col-sm-4">
                          <div class="text-center">
                              <img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset('FUNDAMENTAL/sleep_bot.png')}}">
                          </div>
                      </div>
                      <div class="col-sm-8">
                          <h3><strong> Mis tareas en inicio</strong></h3>
                          <a href="{{route('My-TasksA','start')}}" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>


              <div class="col-lg-3">
                     <div class="contact-box">
                         <div class="col-sm-4">
                             <div class="text-center">
                                 <img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset('FUNDAMENTAL/systemmonitor.png')}}">
                             </div>
                         </div>
                         <div class="col-sm-8">
                             <h3><strong>Mis tareas en proceso</strong></h3>
                             <a href="{{route('My-TasksA','Process')}}" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                         </div>
                         <div class="clearfix"></div>
                     </div>
                 </div>


                 <div class="col-lg-3">
                        <div class="contact-box">
                            <div class="col-sm-4">
                                <div class="text-center">
                                    <img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset('FUNDAMENTAL/tick_tick.png')}}">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h3><strong>Mis tareas finalizadas</strong></h3>
                                <a href="{{route('My-TasksA','finish')}}" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="col-lg-3">
                           <div class="contact-box">
                               <div class="col-sm-4">
                                   <div class="text-center">
                                       <img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset('FUNDAMENTAL/falconpro(2).png')}}">
                                   </div>
                               </div>
                               <div class="col-sm-8">
                                   <h3><strong>Mis tareas no finalizadas</strong></h3>
                                   <a href="{{route('My-TasksA','No-finish')}}" class="btn btn-primary btn-rounded btn-block btn-outline">Ir</a>
                               </div>
                               <div class="clearfix"></div>
                           </div>
                       </div>




    </div>
  </div>




@endsection
