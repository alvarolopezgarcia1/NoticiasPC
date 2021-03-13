@extends("layouts.app")


@section("content")
@if (count(Cart::getContent()))
<div class="row justify-content-center" style="margin : 5vh;">
    <button class="btn btn-dark btn1"><a href="{{route('cart.checkout')}}" style="color : white;"> <i class="fas fa-shopping-cart"></i> VER CARRITO <span class="badge badge-danger">{{count(Cart::getContent())}}</span></a></button>
</div>
@endif
<div class="contenido" style="margin : 5vh 10vh 10vh 10vh;background-color: rgba(255, 255, 255, 0.8);">
    <div class="row" style="margin : 3vh;">
        <button href="/" class="btn btn-primary btn1 " style="margin : 3vh;float:left ;">Todos los cursos
            <a href="/showCursos" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
                </svg>
            </a>
        </button>
    </div>
    <div>
       <div id="card3" class="card mb-3">
        <img class="card-img-top cardImg2" src="{{$curso->foto}}" alt="Card image cap">
        <div class="card-body" style="text-align : center;">
            <h2 class="card-title">{{ $curso->nombre }}</h2>
            <h5 class="card-text">{{ $curso->descripcion }}</h5>
            <p style="text-align : center;"><strong >Hazte con él por solo: {{ $curso->precio }} €</strong></p>
            <form action="{{route('cart.add')}}" method="post" style="margin : 3vh;">
                @csrf
                <div>
                    <input type="hidden" name="id" value="{{$curso->id}}">
                    <input type="submit" name="btn"  class="btn btn-success btn1" value="Añade el curso">
                </div>
            </form>

        </div>
    </div>
</div>
</div>
</div>
@endsection
