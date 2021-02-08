@extends('layouts.app')


@section('content')

<div class="container">

	@if((Auth::user()->rol == 1)||(Auth::user()->rol == 2))

                <button class="btn btn-success" onclick="show()">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    <label for="titulo">Crear nuevo articulo</label>
                </button>
             

<form id="form" action="{{ route('articulo.create') }}" method="POST" style="display : none;" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col-md-6">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" placeholder="Inserte titulo" name="titulo"required>
                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion" rows="3"  name="descripcion"required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <label for="imagen">Imagen</label>
                            <input type="text" class="form-control" id="imagen" placeholder="Inserte URL de la imagen" name="imagen"required>
                        </div>
                    </div><br>

                    <div class="row" style="display : none;">
                        <div class="col-md-8">
                            <label for="idUsu">usu</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->idUsu }}" id="isUsu" name="idUsu"required>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-md-4">
                        <label for="idCat">Categoria</label>
                        <select type="integer" class="form-control" id="idCat" name="idCat"required>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->idCat }}">{{ $categoria->titulo }}</option>
                            @endforeach
                        </select>
                    </div>
                   </div>
                    <br>

                <div class="row">
                    <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">Aceptar</button>
                    </div>
                </div> <br>

                    
            </form>
@endif

<div class= "col-12" style="margin-top : 2vh;">
    <div class = "input-group">

    <input type = "text" class = "form-control" id = "texto" placeholder  = "Buscar">
    <div class =  "input-group-append"> <span class = " input-group-text"> Buscar </span></div>
    </div>

    <div id = "resultados" class = "bg-light border"></div>

    @include ('articulos.paginas')

</div>


    
</div>     
 
{{ $articulo->links() }}
    
</div>

<script src="../js/buscadorArticulo.js" language="javascript" type="text/javascript"></script>

<script src="../js/formScript.js" language="javascript" type="text/javascript"></script>



@endsection