@extends('layouts.app')

@section('content')



@foreach ($tasks as $key => $value)
  {{$value->titulo}}
@endforeach


@endsection
