@extends('layouts.login_register')

@section('content')

<style media="screen">
    .middle-box {
    max-width: 900px;
    z-index: 100;
    margin: 0 auto;
    padding-top: 20px;
    }

    .loginscreen.middle-box {
          width: 500px;
      }

    .gray-bg, .bg-muted {
      background-color: #70ceae;
    }

</style>
  <div class="middle-box text-center loginscreen animated fadeInDown">
          <div class="panel panel-default">
            <div class="panel-heading ">
              <div class="">
                 <img  class="  img-responsive text-center"  src=" {{ asset('FUNDAMENTAL/ICONO-SPACE.png')  }}">
              </div>
              <form  role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label  class="">Correo:</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label  class="">Contreaseña:</label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>


                  <div class="form-group">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                              </label>
                          </div>
                  </div>

                  <button type="submit" class="btn btn-primary block full-width m-b">Ingresa</button>
              </form>



                       <!-- Small modal -->
                      <button type="button" class="btn " data-toggle="modal" data-target=".bs-example-modal-sm">Registrate</button>

                      <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="row text-center">
                              <img  class="text-center" height="200" width="200"  src=" {{ asset('FUNDAMENTAL/ICONO-SIN-LETRA.png')  }}">
                              <br>
                              <br>
                              <div class="col-md-12">
                                <h4>Registrate y unite a un grupo</h4>
                                <a class="btn btn-success" href="{{route('Validate-code')}}"><i class="fa fa-location-arrow" aria-hidden="true"></i></a>
                                <br>
                              <br>
                           
                              </div>

                              <div class="col-md-12">
                                <h4>Registrate y crea tu grupo</h4>
                                <a class="btn btn-info" href="{{ route('register') }}"><i class="fa fa-location-arrow" aria-hidden="true"></i></a>
                                 <br>
                                <br>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>

            </div>
          </div>
      </div>



@endsection
