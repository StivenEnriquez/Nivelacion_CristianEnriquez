<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{ asset('css/superfish.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
	<!-- CS Select -->
	<link rel="stylesheet" href="{{ asset('css/cs-select.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cs-skin-border.css') }}">
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>


    <!-- Scripts <script src="{{ asset('js/app.js') }}" defer></script> -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <!--div id="app"-->
    <div id="fh5co-wrapper">
	<div id="fh5co-page">
        <header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Travel System</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li ><a href="{{route('home')}}">Inicio</a></li>
                            @auth
                            <li>
                                <a href="{{ url('/viajes') }}" class="text-sm text-gray-700 underline">Viajes</a>
                            </li>
                            <li>
                                <a href="{{ url('/tickets') }}" class="text-sm text-gray-700 underline">Tickets</a>
                            </li>
                            <li>
                                <a href="{{ url('/rutas') }}" class="text-sm text-gray-700 underline">Rutas</a>
                            </li>
                            <li>
                                <a href="{{ url('/clientes') }}" class="text-sm text-gray-700 underline">Clientes</a>
                            </li>
                            @else
                            <li class="active" >
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Agencia</a>
                            </li>
                            @endauth
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            
                        @endguest
                   
						</ul>
					</nav>
				</div>
			</div>
		</header>
        <main class="py-8">
            @yield('content')
        </main>
        <br>
        <br>

        </div>
		</div>

    <!--/div-->
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/sticky.js') }}"></script>

	<!-- Stellar -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Superfish -->
	<script src="{{ asset('js/hoverIntent.js') }}"></script>
	<script src="{{ asset('js/superfish.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
	<!-- CS Select -->
	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/selectFx.js') }}"></script>
    <!-- Main JS -->
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
