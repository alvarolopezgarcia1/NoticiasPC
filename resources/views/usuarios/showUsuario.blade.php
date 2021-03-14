@extends('layouts.app')
@section('content')
<div class="container">
 
      <div class="col-md-12">
        
        <form id="form" class="col-md-12" action="{{ route('usuario.update',['idUsu' => $usuario->idUsu]) }}" method="POST" style="margin : 3vh; display : block;" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name}}"required>
                    </div>
            </div>

            <div class="row" style="margin-bottom : 2vh;">
                <div class="col-md-12">
                    <label for="email">Email</label>
                    <textarea class="form-control" id="email" rows="3" name="email"required>{{ $usuario->email}}
                    </textarea>
                </div>
                </div>
       
        @if((Auth::user()->rol == 1))   

                <div class="row" style="margin-bottom : 2vh;">
                    <div class="col-md-3">
                        <label for="rol">Rol</label>
                        <select type="integer" class="form-control" id="rol" name="rol"required>
                   	

                          @if ( $usuario->rol == 2)
                              <option value="{{ $usuario->rol }}">Editor</option>
                          
                            
                          @elseif($usuario->rol == 1)                   
                          	<option value="{{ $usuario->rol }}">Administrador</option> 

                          @else
                          	<option value="{{ $usuario->rol }}">Usuario</option>     

                          @endif


                            <option value="1">Administrador</option>
                            <option value="2">Editor</option>  
                            <option value="0">Usuario</option>                       
                          
                        </select>
                    </div>
                </div>

        @elseif((Auth::user()->rol == 2))     
                <div class="row" style="margin-bottom : 2vh;">
                    <div class="col-md-3">
                        
 						<option value="2"> Rol : Editor</option>
                    </div>
                </div>
        @else
                <div class="row" style="margin-bottom : 2vh;">
                    <div class="col-md-3">
                        <option value="0"> Rol : Usuario</option>
                    </div>
                </div>
        @endif

         @if((Auth::user()->rol == 1))   

                <div class="row">
                    <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">Aplicar cambios</button>
                    </div>
                </div>
        </form>

         @endif

    </div>


  @endsection