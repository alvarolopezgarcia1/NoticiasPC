<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">


     <link rel="shortcut icon" type="image/png" href="{{ asset('../imagen/favicon.jpg') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('../imagen/favicon.jpg') }}">

</head>


<body id = "body">
 <img class="bannerIzq" src="../imagen/banner2.jpg">
 <img class="bannerDer" src="../imagen/banner2.jpg">
 <div id = "cuerpo">
    <div id= "app" >
        <div id = "cuerpo2" >

            <aside class="responsive-banner">
                <img src="https://24h24l.org/images/banner-hardware.png" style = "height: : 100px; height: 215px;  object-fit: cover;" />
            </aside>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
  </a>
                    <a class="navbar-brand" href="/noticiaIndex">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        @if(Auth::check())
                        <ul class="navbar-nav mr-auto">

                            <li class = "nav-item active">
                                <a class = "nav-link" href="/noticiaIndex">Noticias</a>
                            </li>

                            <li class = "nav-item active">
                                <a class = "nav-link" href="/articuloIndex">Artículos</a>
                            </li>

                            <li class = "nav-item active">
                                <a class = "nav-link" href="/analisisIndex">Analisis</a>
                            </li>

                            <li class = "nav-item active">
                                <a class = "nav-link" href="/showCursos">Cursos</a>
                            </li>

                            

                            @if(Auth::user()->rol == 1)
                            <li class = "nav-item active">
                                <a class = "nav-link" href="/usuariosIndex">Usuarios</a>
                            </li>
                            @endif

                        </ul>

                        @endif

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <li class = "nav-item active">

                            </li>
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <a class = "nav-link" href="/usuarioShow/{{ Auth::user()->idUsu }}">Mi perfil</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
</div>


</body>
</html>
