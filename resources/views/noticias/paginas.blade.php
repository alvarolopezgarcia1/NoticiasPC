@if (count($noticias))
<div class="row col-md-14 justify-content-center">
@foreach($noticias as $noticia )
<div class="card" style="width: 18rem;">

   
        <img class="card-img-top" src="{{$noticia->imagen}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href = "/noticiaShow/{{ $noticia->idNot }}" >{{ $noticia->titulo }}</a></h5>
            <p class="card-text">{{ $noticia->descripcion }}</p>
        
        </div>

</div>
     @endforeach
</div>
@endif   