@if (count($analisis))
<div class="row col-md-14 justify-content-center">
@foreach($analisis as $analisi )
<div id ="card2" class="card">

   
        <img class="card-img-top cardImg1" src="{{$analisi->imagen}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href = "/analisisShow/{{ $analisi->idAna }}" >{{ $analisi->titulo }}</a></h5>
            <p class="card-text">{{ $analisi->descripcion }}</p>
        </div>

</div>
     @endforeach
</div>
@endif 

