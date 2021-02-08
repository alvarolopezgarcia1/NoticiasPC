@extends('layouts.app')


@section('content')

	<div class="container">

    <div class= "col-12" style="margin-top : 2vh;">
    <div class = "input-group">

    <input type = "text" class = "form-control" id = "texto" placeholder  = "Buscar">
    <div class =  "input-group-append"> <span class = " input-group-text"> Buscar </span></div>
    </div>

    <div id = "resultados" class = "bg-light border"></div>

    @include ('usuarios.paginas')

</div>

		

{{ $usuarios->links() }}

	</div>

  <script src="../js/buscadorUsuario.js" language="javascript" type="text/javascript"></script>

  <script src="../js/formScript.js" language="javascript" type="text/javascript"></script>



@endsection