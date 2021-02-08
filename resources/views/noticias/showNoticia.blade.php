@extends('layouts.app')
@section('content')
<div class="container">
  
  <p>{{ $noticia->titulo }}</p>
  <p>{{ $noticia->descripcion }}</p>
  <p>{{ $noticia->imagen }}</p>
  <p>{{ $nombreCategoria }}</p>
  <p>{{ $nombre }}</p>
@if((Auth::user()->rol == 1)||(Auth::user()->rol == 2))
   <button class="btn btn-danger btn-lg" style="margin-right : 1vh;">
                    <a href="/destroyNoticia/{{ $noticia->idNot }}" data-toggle="tooltip" data-placement="top" title="borrar" style="color : white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  						<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  						<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
						</svg> Borrar
                    </a>
    </button>

    <button class="btn btn-info btn-lg" style="margin-right : 1vh;" onclick="show()">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg> Editar
          </a>
    </button>

@endif

      <div class="col-md-12">
        
        <form id="form" class="col-md-12" action="{{ route('noticia.update',['idNot' => $noticia->idNot]) }}" method="POST" style="margin : 3vh; display : none;" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $noticia->titulo}}"required>
                    </div>
            </div>
                <div class="row" style="margin-bottom : 2vh;">
                    <div class="col-md-12">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"required>{{ $noticia->descripcion}}</textarea>
                    </div>
                </div>


           <div class="row">
                    <div class="col">
                        <label for="nombre">Imagen</label>
                        <input type="text" class="form-control" id="imagen" name="imagen" value="{{ $noticia->imagen}}"required>
          </div>

          </div>
       

                <div class="row" style="margin-bottom : 2vh;">
                    <div class="col-md-3">
                        <label for="idCat">Categoría</label>
                        <select type="integer" class="form-control" id="idCat" name="idCat"required>
                            <option value="{{ $noticia->idCat }}">{{ $nombreCategoria }}</option>
                            @foreach($categorias as $categoria)                             
                                    <option value="{{ $categoria->idCat }}">{{ $categoria->titulo }}</option>                          
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">Aceptar</button>
                    </div>
                </div>
        </form>
    </div>
</div>

<script src="../js/formScript.js" language="javascript" type="text/javascript"></script>

@endsection