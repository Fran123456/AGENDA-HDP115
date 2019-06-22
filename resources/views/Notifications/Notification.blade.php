@extends('layouts.app')

@section('content')


 <div class="container">
   <div class="row">


     <div class="col-md-12">
                  <div class="ibox float-e-margins">
                             <div class="ibox-title">
                                 <h5><i class="fa fa-thumb-tack" aria-hidden="true"></i>NOTIFICACIÓN</h5>
                                 <div class="ibox-tools">
                                     <a class="collapse-link">
                                         <i class="fa fa-chevron-up"></i>
                                     </a>
                                 </div>
                             </div>
                             <div class="ibox-content">


                                 <div class=" animated fadeInRight">
                                 <div class="mail-box-header">
                                     <div class="pull-right tooltip-demo">
                                         <a href="mailbox.html" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i> </a>
                                     </div>
                                     <div class="mail-tools tooltip-demo m-t-md">
                                         <h3>
                                             <span class="font-normal"></span>{{$info['noty']->titulo}}
                                         </h3>
                                         <h5>
                                             <span class="pull-right font-normal">{{$info['noty']->created_at}}</span>
                                             <span class="font-normal">Enviado por: </span>{{$info['owner']->name}}
                                             <br>
                                             <br>
                                             <span class="font-normal">Correo: </span>{{$info['owner']->email}}
                                         </h5>
                                     </div>
                                 </div>
                                         <!--CUERPO-->
                                         <div style="padding-left: 20px;padding-bottom: 20px">
                                             
                                         @if ($info['noty']->tipo =="tarea")
                                             {!!$info['noty']->cuerpo!!} <br> <br>
                                             <a href="{{route('Tasks.show', $info['noty']->tarea_id)}}" class="btn btn-primary btn-rounded btn-outline">Ver tarea</a>
                                            </div>
                                         @elseif ($info['noty']->tipo =="invitacion")
                                           <div>
                                            @if (false)
                                                {!!$info['noty']->cuerpo!!}  {{$invitacion->nombre_grupo}}<br> <br>
                                                <h3>Ya ha respondido a esta invitación</h3>
                                            @else
                                                {!!$info['noty']->cuerpo!!}  {{$invitacion->nombre_grupo}}<br> <br>
                                                <a class=" btn btn-primary" href="{{ route('aceptarSoli', $info['noty']->grupo) }}">Aceptar</a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class=" btn btn-danger" href="{{ route('rechazarSoli', $info['noty']->grupo) }}">Rechazar</a>
                                            @endif  
                                            </div>
                                         @elseif($info['noty']->tipo == 'aceptarSoli')
                                            {!!$info['noty']->cuerpo!!}

                                        @elseif($info['noty']->tipo =="askingSoli")
                                          <a class="text-right btn btn-info" href="{{route('acepting', ['id' =>$info['owner']->id, 'id2' =>$invitacion->codigo_grupo])}}">Aceptar</a>
                                         @endif
                                          <!--CUERPO-->
                                  </div>
                             </div>
                   </div>
               </div>


   </div>
 </div>

@endsection



