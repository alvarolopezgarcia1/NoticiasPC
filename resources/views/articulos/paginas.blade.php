@if (count($articulo))
<div class="row col-md-14 justify-content-center">
	@foreach($articulo as $articulo )
	<div id ="card2">

		
		<a href = "/articuloShow/{{ $articulo->idArt }}" ><img class="card-img-top cardImg1" href = "/articuloShow/{{ $articulo->idArt }}" src="{{$articulo->imagen}}" alt="Card image cap"></a>
		<div class="card-body">
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><h5 class="card-title"><a href = "/articuloShow/{{ $articulo->idArt }}" >{{ $articulo->titulo }}</a></h5></li>
				
				<li class="list-group-item"><p class="card-text">{{ $articulo->descripcion }}</p></li>
			</ul>
		</div>

	</div>
	@endforeach
</div>
@endif 

