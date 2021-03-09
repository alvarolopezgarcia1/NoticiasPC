@extends('layouts.app')

@section('content')
<div class="contenido" style="margin : 5vh 10vh 10vh 10vh;background-color: rgba(255, 255, 255, 0.9);">
    <div class="row" style="margin : 3vh;">
        <button href="/" class="btn btn-secondary btn-lg " style="margin : 3vh;float:left ;">
            <a href="/showCursos" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
                </svg>
            </a>
        </button>
    </div>
    <div class="row" style="margin : 5vh;">
       <div class="col-sm-12">
           @if (count(Cart::getContent()))
           <table class="table table-striped">
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
                            <button type="submit" class="btn btn-link btn-sm text-danger">x</button>
                        </form>
                    </td>
                </tr>
                
                @endforeach
                <tr>
                    <td><strong>TOTAL : </strong></td>
                    <td></td>
                    <td>{{$total}} €</td>
                    <td><a href="compraRealizada" class="btn btn-primary">Comprar</a></td>
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