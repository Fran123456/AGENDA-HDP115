@extends('layouts.login_register')



@section('content')

<style type="text/css">
    .gray-bg, .bg-muted {
      background-color: #70ceae;
    }
</style>


<div class="container">
    <div class="row">
        <div class="col-md-12">
          <br>
          <br>
            <div class="panel panel-default">

                <div class="panel-heading">Ingresa el codigo de invitación</div>

                <div class="panel-body row">


                    <!--logo-->
                     <div class="col-md-3">
                     <img  class="  img-responsive text-center"  src=" {{ asset('FUNDAMENTAL/ICONO-SPACE.png')  }}">
                     </div>
                     <!--logo-->

                    <!--FORMULARIO-->
                    <div class="col-md-9">
                        <form class="form-horizontal" method="post" action="{{ route('validarCode') }}">
                            {{ csrf_field() }}
                          <h4 class="text-right">Verificación de código</h4>

                          @if(session('codigo'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>{{session('codigo')}}</strong>
                            </div>
                          @endif

                          <hr>
                            <div class="form-group">
                                <label  class="col-md-3 control-label">Código:</label>

                                <div class="col-md-9">
                                    <input  type="text" class="form-control" name="code" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="text-right col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Validar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--FORMULARIO-->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
