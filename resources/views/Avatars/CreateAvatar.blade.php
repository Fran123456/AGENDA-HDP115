@extends('layouts.app')

@section('content')

 <div class="container">
   <h2>Sube tu avatar</h2>
   <hr>
   <div class="row">
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <label >Nombre avatar</label>
            <input type="file" class="form-control" id="img" name="file">
            <button type="button" onclick="activar()" name="button">Visualizar</button>
          </div>
        </form>
   </div>
 </div>

 <script type="text/javascript">
   function activar(){
     alert($('#img').val());
   }
 </script>
@endsection
