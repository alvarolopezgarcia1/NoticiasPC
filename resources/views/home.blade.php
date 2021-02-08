@extends('layouts.app')
@section('content')


 @foreach($noticias as $noticia )
<div class="card" style="width: 18rem;">

   
        <img class="card-img-top" src="{{$noticia->imagen}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href = "/noticiaShow/{{ $noticia->idNot }}" >{{ $noticia->titulo }}</a></h5>
            <p class="card-text">{{ $noticia->descripcion }}</p>
        </div>
</div>
     @endforeach


<div class = "col-md-4"></div>
<div class = "col-md-4"></div>

</div>

  <div class="row justify-content-center">
        <div class="card bg-light mb-3" style="max-width: 50rem;">
            <div class="card-body">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hD35FdHysTg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        </div>
                        <div class="carousel-item">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/-yCN9J6f_eM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>>
                        </div>
                        <div class="carousel-item">
                           <iframe width="560" height="315" src="https://www.youtube.com/embed/c1Y77FCYmMM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection