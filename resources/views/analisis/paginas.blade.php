@if (count($analisis))
<div class="row col-md-14 justify-content-center">
	@foreach($analisis as $analisi )
	<div id ="card2" class="card">

		
		<a href = "/analisisShow/{{ $analisi->idAna }}" ><img class="card-img-top cardImg1" href = "/analisisShow/{{ $analisi->idAna }}" src="{{ $analisi->imagen }}" alt="Card image cap"></a>
		<div class="card-body">
			<ul class="list-group list-group-flush">
			<li class="list-group-item"> <h5 class="card-title"><a href = "/analisisShow/{{ $analisi->idAna }}" >{{ $analisi->titulo }}</a></h5></li>  
			<li class="list-group-item"> <p class="card-text">{{ $analisi->descripcion }}</p></li>  
		</ul>
		</div>

	</div>
	@endforeach
</div>
@endif 

