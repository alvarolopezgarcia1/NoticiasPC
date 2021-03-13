@if (count($noticias))
<div class="row col-md-14 justify-content-center">
	@foreach($noticias as $noticia )
	<div id ="card2">

		
		<a href = "/noticiaShow/{{ $noticia->idNot }}" ><img class="card-img-top cardImg1" href = "/noticiaShow/{{ $noticia->idNot }}" src="{{$noticia->imagen}}" alt="Card image cap"></a>
		<div class="card-body">
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><h5 class="card-title"><a href = "/noticiaShow/{{ $noticia->idNot }}" >{{ $noticia->titulo }}</a></h5></li>
				<li class="list-group-item"><p class="card-text">{{ $noticia->descripcion }}</p></li>   
			</ul>
		</div>

	</div>
	@endforeach
</div>
@endif   