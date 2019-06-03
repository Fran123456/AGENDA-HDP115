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

                <div class="panel-heading">Registrate</div>

                <div class="panel-body row">


                    <!--logo-->
                     <div class="col-md-3">
                     <img  class="  img-responsive text-center"  src=" {{ asset('FUNDAMENTAL/ICONO-SPACE.png')  }}">
                     </div>
                     <!--logo-->

                    <!--FORMULARIO-->
                    <div class="col-md-9">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                          <h4 class="text-right">Sobre tí</h4>
                          <hr>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-3 control-label">Nombre</label>

                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-3 control-label">Correo</label>

                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-3 control-label">Contraseña</label>

                                <div class="col-md-9">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-3 control-label">Confirma contraseña</label>

                                <div class="col-md-9">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <br>
                            <h4 class="text-right">Sobre tu grupo</h4>
                            <hr>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nombre grupo</label>
                                <div class="col-md-9">
                                    <input type="text" readonly value="{{$da->nombre_grupo}}" maxlength="200" class="form-control"
                                    name="nombre_grupo" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Descripción</label>
                                <div class="col-md-9">
                                    <textarea name="des" readonly class="form-control" rows="4" cols="8">
                                    {{$da->descripcion}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Código grupo</label>
                                <div class="col-md-9">
                                    <input readonly="" value="{{$id}}" type="text" value="" class="form-control"
                                    name="codigo_grupo" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="text-right col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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
