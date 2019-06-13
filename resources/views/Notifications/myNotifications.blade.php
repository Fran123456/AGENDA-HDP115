@extends('layouts.app')

@section('content')
  <style type="text/css">
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

  ul.notes li div a.data {
      position: absolute;
      left: 10px;
      bottom: 10px;
      color: inherit;
  }

  ul.notes li {
      margin-top: 10px;
      margin-right: 40px;
      margin-bottom: 10px;
      margin-left: 0px;
      float: left;
  }

  ul.notes li div {
      text-decoration: none;
      color: #000;
      background: #ffc;
      display: block;
      height: 180px;
      width: 210px;
      padding: 1em;
      -moz-box-shadow: 5px 5px 7px #212121;
      -webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
      box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
      -moz-transition: -moz-transform 0.15s linear;
      -o-transition: -o-transform 0.15s linear;
      -webkit-transition: -webkit-transform 0.15s linear;
  }

  ul.notes li div {
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -moz-transform: rotate(-6deg);
    -ms-transform: rotate(-6deg);
  }
  </style>


 <div class="container">
   <div class="row">
              <div class="col-md-3 col-xs-12">
                          <div class="wrapper wrapper-content animated fadeInUp">
                                    <ul class="notes">
                                         <li>
                                          <div>

                                              <small>2019-03-15 23:02:39</small>
                                              <br>
                                              LA TAREA NO SE FINALIZO, PUEDE REPROGRAMARLA.
                                              <br><br>
                                              Estado: LEIDA


                                                  <a class="data" href="http://mobile-yetitask.djfrankremixer.com/nueva-notificacion/Noty-qhPb6zp3nE-1208582-3676-YbyE2-49875-F9CxEW">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a>


                                                  <a href="http://mobile-yetitask.djfrankremixer.com/delete-noti/Noty-qhPb6zp3nE-1208582-3676-YbyE2-49875-F9CxEW"><i class="fa fa-trash-o "></i></a>


                                          </div>
                                         </li>
                                   </ul>
                            </div>
              </div>
   </div>
 </div>
@endsection