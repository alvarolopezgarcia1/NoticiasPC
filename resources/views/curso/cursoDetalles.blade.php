@extends("layouts.app")


@section("content")
@if (count(Cart::getContent()))
<div class="row justify-content-center" style="margin : 5vh;">
    <button class="btn btn-dark btn1"><a href="{{route('cart.checkout')}}" style="color : white;"> <i class="fas fa-shopping-cart"></i> VER CARRITO <span class="badge badge-danger">{{count(Cart::getContent())}}</span></a></button>
</div>
@endif
<div class="contenido" style="margin : 5vh 10vh 10vh 10vh;background-color: rgba(255, 255, 255, 0.8);">
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
