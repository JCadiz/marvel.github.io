<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- titulo  -->
    <title>@yield('title', 'Marvel')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('marvelLogo.ico ')}}" >

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css')}} ">



    <!-- Responsive CSS -->
    <link href="{{ asset('css/responsive.css')}} " rel="stylesheet">
    <link href="{{ asset('css/style.css ') }}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <header class="header_area">

            <!-- menu real -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">

                            <!-- Logo Empresa -->
                                <div class="top_logo">
                                    <a href="{{ route('home')}}"><img src="" alt=""><img src="{{asset('logo2.png') }}" alt=""></a>
                                </div>


                            <!-- redes sociales en el menu -->
                            <div class="header-social-area">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>

                            <!-- Menu Central -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('movies') }}">Movies</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('personajes') }}">Charapter</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('series') }}">Tv Shows</a></li>

                                            @guest()
                                            <li class="dropdown nav-item">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 Ingrese</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                   <a class="nav-link" href="{{ route('login') }}"> Login</a>
                                                   <a class="nav-link" href="{{ route('register') }}"> Register</a>
                                                </div>
                                            </li>
                                            @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="nav-link" href="{{ route('movies2') }}">Admin Movies</a>
                                                    <a class="nav-link" href="{{ route('personajes2') }}">Admin Character</a>
                                                    <a class="nav-link" href="{{ route('series2') }}">Admin Serie</a>
                                                    <a class="nav-link" href="{{ route('prueba2') }}">Admin Shop</a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                            @endguest
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="py-2">
            @yield('content')
        </main>

         <!-- ****** Footer Area Start ****** -->
        @include('layouts.footer')
        <!-- ****** Footer Area End ****** -->
    </div>


    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js')}} "></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js')}} "></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js')}} "></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js')}} "></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js')}} "></script>
    <!-- Video js -->
    <script src="{{ asset('js/video.js') }}"></script>
</body>
</html>
