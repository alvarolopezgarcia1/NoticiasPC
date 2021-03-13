@extends('layouts.app')

@section('content')
<div class="contenido" style="margin : 5vh 10vh 10vh 10vh;background-color: rgba(255, 255, 255, 0.9);">
    <div class="row" style="margin : 3vh;">

    </div>
    <div class="row" style="margin : 5vh;">
       <div class="col-sm-12">
           @if (count(Cart::getContent()))
           <table class="table table-dark">
            <thead>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
            </thead>
            <tbody>
                @foreach (Cart::getContent() as $curso)
                <tr>
                    <td>{{$curso->id}}</td>
                    <td>{{$curso->name}}</td>
                    <td>{{$curso->price}}</td>
                    <td>{{$curso->quantity}}</td>
                    <td>
                        <form action="{{route('cart.removeitem')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$curso->id}}">
                            <button type="submit" class="btn btn-link btn-sm text-danger">
                                <i class="fas fa-trash-alt"></i></button>

                        </form>
                    </td>
                </tr>
                
                @endforeach

                <div class="modal" id="miModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">¡Compra realizada con éxito!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <p>Recibirá su clave para acceder al curso en su correo</p>
                </div>
            </div>
        </div>
    </div>

    <tr>
        <td><strong>TOTAL : </strong></td>
        <td></td>
        <td>{{$total}} €</td>
        <td><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">
            Comprar
        </button></td>
        <td></td>
    </tr>




</tbody>
</table>

@else
<div class="row" style="margin : 5vh;"><h1>Nada en el carrito</h1></div>

@endif

</div>

</div>
</div>
@endsection