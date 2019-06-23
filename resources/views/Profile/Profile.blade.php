@extends('layouts.app')

@section('content')
  <div class="wrapper wrapper-content">
              <div class="row animated fadeInRight">
                  <div class="col-md-4">
                      <div class="ibox float-e-margins">
                          <div class="ibox-title">
                            <h5>Mi perfil</h5>
                            </div>
                          <div>
                              <div class="ibox-content border-left-right text-center">
                                  <img alt="image" class="img-circle" width="200" high="200" src="{{Auth::user()->avatar}}">
                              </div>
                              <div class="ibox-content profile-content">
                                  <h4><strong>{{Auth::user()->name}}</strong></h4>
                                  <p><i class="fa fa-envelope"></i> &nbsp; {{Auth::user()->email}}</p>
                                  <br>
                                  <p><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Mis grupos:</p>
                                  <ul class="list-group">
                                    @foreach ($grupos as $key => $value)
                                      <li class="list-group-item"><strong>{{$value->nombre_grupo}}</strong> &nbsp; <strong> <small>rol: {{$value->rol}}</small> </strong>  </li>
                                    @endforeach

                                  </ul>
                              </div>
                      </div>
                   </div>
                      </div>


                  <div class="col-md-8">


                        <div class="ibox float-e-margins">
                          <div class="ibox-title">
                              <h5>Contactos</h5>
                              <div class="ibox-tools">
                                  <a class="collapse-link">
                                      <i class="fa fa-chevron-up"></i>
                                  </a>
                              </div>
                          </div>
                          <div class="ibox-content">
                                  <div class="feed-activity-list">
                                    @foreach ($users as $key => $value)
                                      @if ($value->id != Auth::user()->id)
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                  <img alt="image" class="img-circle" src="{{$value->avatar}}">
                                            </a>
                                            <div class="media-body ">
                                              {{$value->name}}<br>
                                              {{$value->email}}   <a href="" class="btn btn-xs btn-danger"><i class="fa fa-user" aria-hidden="true"></i>Ver</a>
                                            </div>
                                        </div>

                                      @endif

                                    @endforeach



                      </div>
                                      </div>



              </div>
          </div>
@endsection
