@extends('layouts.app')

@section('content')

 <div class="container">

   <div class="row">
   <h2><strong>Sube tu avatar</strong></h2>
   <hr>
        <form  action="{{route('Avatars.store')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Nombre avatar:</label>
            <input type="text" required="" name="nombre" class="form-control">
          </div>
          <div class="form-group">
            <label >Imagen:</label>
            <input accept="image/jpeg, image/png" type="file" class="" id="img" name="file">
            
          </div>
          <br>
          <input type="submit" class="btn btn-primary" name="" value="Subir">
        </form>
   </div>
 </div>

 <script type="text/javascript">
   function activar(){
     //alert($('#img').val());

   }
 </script>
@endsection
