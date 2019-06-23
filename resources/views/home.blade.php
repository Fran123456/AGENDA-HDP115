@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Información</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Grupo activo: <strong>{{$grupo->nombre_grupo}}</strong>
                    <br><br>
                    Codigo grupo: <strong>{{ Auth::user()->grupo_activo}}</strong>
                    <br><br>
                    Número de usuarios: <strong>{{$n}}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
