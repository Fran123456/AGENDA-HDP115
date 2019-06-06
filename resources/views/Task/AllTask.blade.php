@extends('layouts.app')

@section('content')

<script src="{{asset('ckeditor/ckeditor.js')}}">
</script>
  <div class="container">
    <div class="row">
     <div class="col-md-6">
       <h2><strong>Todas tus tareas en el grupo: {{$group->nombre_grupo}}</strong></h2>
     </div>
     <div class="col-md-6 text-right">
       <a class="btn btn-success" href="{{route('Tasks.create')}}">Agregar tarea</a>
     </div>
   </div>
   <hr>
  </div>














  
@endsection
