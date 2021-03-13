@extends("layouts.app")


@section("content")
    <div>
        @if (count(Cart::getContent()))
        <div class="row justify-content-center" style="margin : 5vh;">
    <button class="btn btn-dark btn1"><a href="{{route('cart.checkout')}}" style="color : white;"> <i class="fas fa-shopping-cart"></i> VER CARRITO  <span class="badge badge-danger">{{count(Cart::getContent())}}</span></a></button>
</div>
        @endif
        <div class="row col-md-12 justify-content-center">

            @foreach($cursos as $curso)

            <div id="card2" class = "card">
                <div class="card-body">
                    <img class="card-img-top" src="{{$curso->foto}}" alt="Card image cap">
                    <h5 class="card-title">{{ $curso->nombre }}</h5>
                    

                </div>
                <form action="{{route('cart.add')}}" method="post" style="margin : 3vh;">
                    @csrf
                    <div>
                    <input type="hidden" name="id" value="{{$curso->id}}">
                    <input type="submit" name="btn"  class="btn btn-success" value="Añadir curso">
                    <a href="/cursoDetalles/{{ $curso->id }}" class="btn btn-primary">Conoce más</a>
                </div>
                </form>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection 