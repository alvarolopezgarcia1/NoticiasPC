	@if (count($usuarios))
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Rol</th>
      <th scope="col">Fecha de registro</th>
      <th></th>
      <th></th>

   </tr>
  </thead>
  <tbody>

  	@foreach ( $usuarios as $usuario )
    
    <tr>
      <td>{{ $usuario->idUsu }}</td>
      <td>{{ $usuario->name }}</td>
      <td>{{ $usuario->email }}</td>
      @if ( $usuario->rol == 1)
      <td> Administrador</td>
      @elseif ( $usuario->rol == 2) 
      <td> Editor </td>
      @else
 	    <td> Usuario </td>
      @endif
      <td>{{ $usuario->created_at}}</td>
      <td> 
          <button class="btn btn-danger btn-lg" style="margin-right : 5vh;">
          <a href="/destroyUsuario/{{ $usuario->idUsu }}" data-toggle="tooltip" data-placement="top" title="borrar" style="color : white;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
          </svg> Borrar
                    </a>
          </button></td>

      <td>
          <button class="btn btn-info btn-lg" style="margin-right : 1vh;" onclick="show()">
          <a href="/usuarioShow/{{ $usuario->idUsu }}" data-toggle="tooltip" data-placement="top" title="borrar" style="color : white;">  
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg> Editar
          </a>
    </button> </td>
    
          
    </tr>

   @endforeach
    
  </tbody>
</table>
@else
@endif  

