@extends('layouts.app')
@section('content')
<div class="container">
  
  <div id="card3" class="card mb-3">
    <img class="card-img-top cardImg2" src="{{$analisis->imagen}}" alt="Card image cap">
    <div class="card-body">
      <h2 class="card-title">{{ $analisis->titulo }}</h2>
      <h5>{{ $analisis->descripcion }}</h5>
      <h5> Puntuación: {{ $analisis->nota }}</h5>
      <h4>{{ $nombreCategoria }}</h4>
      <h4><small class="text-muted"> Autor: {{ $nombre }}, fecha de publicación: {{ $analisis->updated_at }}</small></h4>
    </div>

    <div class="row" style="margin-left: 2vh; margin-bottom : 2vh;">
      
      @if((Auth::user()->rol == 1)||(Auth::user()->rol == 2))
      
      <div class="col-md-3">
      <button class="btn btn-danger btn-lg btn1">
        <a href="/destroyAnalisis/{{ $analisis->idAna }}" data-toggle="tooltip" data-placement="top" title="borrar" style="color : white;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
          </svg> Borrar
        </a>
      </button>
      </div>

      <div class="col-md-3">  
      <button class="btn btn-info btn-lg btn1" onclick="show()">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg> Editar
      </a>
    </button>
    </div>  

    @endif

  </div>

</div>


<button class="btn btn-success btn1" onclick="show2()">
  <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </svg>
  <label for="titulo">Añadir un comentario</label>
</button>

<div class="col-md-12">
  
  <form id="form" class="col-md-12" action="{{ route('analisis.update',['idAna' => $analisis->idAna]) }}" method="POST" style="margin : 3vh; display : none;" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $analisis->titulo}}"required>
      </div>
    </div>
    <div class="row" style="margin-bottom : 2vh;">
      <div class="col-md-12">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"required>{{ $analisis->descripcion}}</textarea>
      </div>
    </div>


    <div class="row">
      <div class="col">
        <label for="nombre">Imagen</label>
        <input type="text" class="form-control" id="imagen" name="imagen" value="{{ $analisis->imagen}}"required>
      </div>

      <div class="row">
        <div class="col">
          <label for="nota">Nota</label>
          <input type="text" class="form-control" id="nota" name="nota" value="{{ $analisis->nota}}"required>
        </div>
      </div>

    </div>
    

    <div class="row" style="margin-bottom : 2vh;">
      <div class="col-md-3">
        <label for="idCat">Categoría</label>
        <select type="integer" class="form-control" id="idCat" name="idCat"required>
          <option value="{{ $analisis->idCat }}">{{ $nombreCategoria }}</option>
          @foreach($categorias as $categoria)                             
          <option value="{{ $categoria->idCat }}">{{ $categoria->titulo }}</option>                          
          @endforeach
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <button class="btn btn-primary btn1" type="submit">Aceptar</button>
      </div>
    </div>
  </form>
</div>

<form id="form2" action="{{ route('comentarioAnalisis.create') }}" method="POST" style="display : none;" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col">
      <label for="comentario">Comentario</label>
      <textarea class="form-control" id="comentario" rows="3"  name="comentario"required></textarea>
    </div>
  </div>

  <div class="row" style="display : none;">
    <div class="col-md-8">
      <label for="idUsu">usu</label>
      <input type="text" class="form-control" value="{{ Auth::user()->idUsu }}" id="idUsu" name="idUsu"required>
    </div>
  </div>    

  <div class="row" style="display : none;">
    <div class="col-md-8">
      <label for="idAna">ana</label>
      <input type="text" class="form-control" value="{{ $analisis->idAna }}" id="idAna" name="idAna"required>
    </div>
  </div>   

  <div class="row">
    <div class="col-md-6">
      <p></p>
      <button class="btn btn-primary btn1" type="submit">Aceptar</button>
    </div>
  </div> <br>

  
</form>



@foreach($com as $key => $comentario )



<div class="row">
  <div class="col-md-8">
    <div class="media g-mb-30 media-comment">
      <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30 comentario">
        <div class="g-mb-15">
          <h5 class="h5 g-color-gray-dark-v1 mb-0">{{ $miarray[$key]}}</h5>
          <span class="g-color-gray-dark-v4 g-font-size-12">{{ $comentario->created_at}}</span>
        </div>       
        <p class="com">{{ $comentario->comentario }}</p>
        @if((Auth::user()->idUsu == $comentario->idUsu))

        <div class="col-md-6">  
        <button class="btn btn-danger btn-lg btn1" style="margin-right : 1vh;">
          <a href="/destroyComAnalisis/{{ $comentario->id }}/{{ $analisis->idAna }}" data-toggle="tooltip" data-placement="top" title="borrar" style="color : white;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg> Borrar
          </a>
        </button>
        </div>  

        <form id="form3" action="{{ route('comentarioAnalisis.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col">
              <label for="comentario"></label>
              <textarea class="form-control" id="comentario" rows="3"  name="comentario"required >{{ $comentario->comentario }}</textarea>
            </div>
          </div>

          <div class="row" style="display : none;">
            <div class="col-md-8">
              <label for="idUsu">usu</label>
              <input type="text" class="form-control" value="{{ Auth::user()->idUsu }}" id="idUsu" name="idUsu"required>
            </div>
          </div>    

          <div class="row" style="display : none;">
            <div class="col-md-8">
              <label for="idAna">not</label>
              <input type="text" class="form-control" value="{{ $analisis->idAna }}" id="idAna" name="idAna"required>
            </div>
          </div>


          <div class="row" style="display : none;">
            <div class="col-md-8">
              <input type="text" class="form-control" value="{{ $comentario->id }}" id="id" name="id"required>
            </div>
          </div>    
          <br>    

          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-primary btn1" type="submit">Modificar comentario</button>
            </div>
          </div> <br>

          
        </form>



        @endif
      </div>
    </div>
  </div> 

</div>


@endforeach

</div>

<script src="../js/formScript.js" language="javascript" type="text/javascript"></script>
@endsection