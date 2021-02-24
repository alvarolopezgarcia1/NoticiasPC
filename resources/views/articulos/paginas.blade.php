@if (count($articulo))
<div class="row col-md-14 justify-content-center">
@foreach($articulo as $articulo )
<div id ="card2" class="card">
   
        <img class="card-img-top cardImg1" src="{{$articulo->imagen}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href = "/articuloShow/{{ $articulo->idArt }}" >{{ $articulo->titulo }}</a></h5>
            <p class="card-text">{{ $articulo->descripcion }}</p>
        </div>

</div>
     @endforeach
</div>
@endif 

