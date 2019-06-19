<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->



  <!--PLANTILLA---------------------------------------------------------------------->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">





<!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{asset('js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style type="text/css">
  .minimalize-styl-2 {
    padding: 4px 4px;
    margin: 14px 5px 5px 20px;
    font-size: 14px;
    float: left;
}

.nav > li > p {
    color: #a7b1c2;
    font-weight: 600;
    padding: 14px 20px 14px 25px;
}

.stylea{
  color: #676a6c;
  font-weight: bold;
 font-size: 1.5em;
}

body {
    font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    background-color: #65A08C;
    font-size: 13px;
    color: black;
    overflow-x: hidden;
}
h1{
  color: White;
}
</style>
<!--PLANTILLA------------------------------------------------------------------------>

</head>
<body>

  <div>
    <!--ESTO ES PARA CUANDO SE AGREGA UN AVATAR NUEVO-->
    @if(session('agregado'))
    <script type="text/javascript">
        swal("Tarea agregada correctamente", "", "success");
      </script>
    @endif

    @if(session('change'))
    <script type="text/javascript">
        swal("Cambio de grupo realizado con exito", "", "success");
      </script>
    @endif


    <!--ESTO ES PARA CUANDO SE AGREGA UN AVATAR NUEVO-->
  </div>

   <br><br><br>

   <div style="padding-top: 20px;">
          <div class="text-center">
            <img height="120" width="120" src="{{asset('FUNDAMENTAL/ICONO-SIN-LETRA.png')}}">
            <h1><strong>HOLA {{$name }}&nbsp;,&nbsp;SELECCIONA UN GRUPO</strong></h1><br>
          </div>
        </div>

    <div class="container" style="padding-top: 30px;">
    	<div class="row">
        
    		@foreach($groups as $key => $value)
    		<div class="col-md-4 col-xs-12 col-xl-4" >
               <div class="ibox">
                  <div class="ibox-content product-box" style="border: #4D7A6B 3px solid;">
                      
                          <div class="product-desc">
                             <span class="product-price">{{$value->nombre_grupo}}</span>
                           </div>
                            <div class="text-center aa">
                                 <h5>Rol: {{$value->rol}}</h5>
                                 <h4>{{$value->codigo_grupo}}</h4>
                                    <div class="row">
                                      <div class="col-xs-6 text-center">
                                        <a class="btn btn-info btn-rounded"  href="{{route('changeGroupBegin', $value->codigo_grupo)}}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>Seleccionar</a>
                                      </div>
                                    </div>
                                      </div><br>
                 </div>
             </div>
         </div>
         @endforeach
         <div class="col-md-12">
         	{{$groups->render()}}
         </div>
    	</div>
    </div>

</body>

</html>
