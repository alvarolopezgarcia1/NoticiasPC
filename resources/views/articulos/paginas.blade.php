@if (count($articulo))
<div class="row col-md-14 justify-content-center">
@foreach($articulo as $articulo )
<div class="card" style="width: 18rem;">

   
        <img class="card-img-top" src="{{$articulo->imagen}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href = "/articuloShow/{{ $articulo->idArt }}" >{{ $articulo->titulo }}</a></h5>
            <p class="card-text">{{ $articulo->descripcion }}</p>
        </div>

</div>
     @endforeach
</div>
@endif 

