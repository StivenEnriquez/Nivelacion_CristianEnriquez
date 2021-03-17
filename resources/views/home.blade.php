
<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel System</title>
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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="/home"><i class="icon-airplane"></i>Travel System</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="./">Inicio</a></li>
							<li>
                            @auth
                                <a href="{{ url('/viajes') }}" class="text-sm text-gray-700 underline">Administrador</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Agencia</a>
                            @endauth
                            </li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_2.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Ticket</a>
								      </li>
									  <li role="presentation">
								    	   <a href="#cliente" aria-controls="cliente" role="tab" data-toggle="tab">Cliente</a>
								      </li>
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
										<form id="form-submit" action="{{route('registro_ticket' )}}" method="post">
                               			 @csrf
											<div class="col-sm-12 mt">
												<section>
													<label for="viaje_id">Vuelo:</label>
													<select required name='viaje_id' id="viaje_id" onchange='this.form.()' class="cs-select cs-skin-border">
													@foreach($vuelos as $v)
														<option value="{{ $v->id }}">
														{{ $v->ruta->origen .' - '. $v->ruta->destino.' ('.$v->fecha_1.') $'.$v->ruta->precio_base.' COP'}}
														</option>
													@endforeach
													</select>
												</section>
											</div>
											
											<div class="col-sm-12 mt">
												<section>
													<label for="clase_id">Clase:</label>
													<select name='clase_id' id="clase_id" class="cs-select cs-skin-border">
													@foreach($clases as $c)
														<option value="{{ $c->id }}">{{ $c->descripcion .' + $'. $c->precio_extra}}</option>
													@endforeach
													</select>
												</section>
											</div>

											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="id">Cédula de Ciudadanía:</label>
													<input type="text" class="form-control" name="id" id="id" placeholder="1087XXXXXX"
													required>
												</div>
											</div>
											
											<div class="col-xs-12">
											<label for="id">Si no estás registrado, hazlo a continuación...</label>
												<input type="submit" class="btn btn-primary btn-block" value="Comprar ticket">
											</div>
											</form>
										</div>
									 </div>
									 <div role="tabpanel" class="tab-pane active" id="cliente">
									 	<div class="row">
										 <form id="form-submit" action="{{route('registro_cliente' )}}" method="post">
                               			 @csrf
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
												</br>
													<label for="nombre">Nombre:</label>
													<input type="text" class="form-control" name="nombre"id="nombre" placeholder="Escribe tu nombre..."
													required>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="identificacion">Cédula de Ciudadanía:</label>
													<input name="identificacion" type="text" class="form-control" id="identificacion" placeholder="Escribe tu identificación..."
													required>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="telefono">Telefono:</label>
													<input name="telefono" type="text" class="form-control" id="telefono-place" placeholder="Numero de contacto..."
													required>
												</div>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Registrar">
											</div>
											</form>
										</div>
									 </div>
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h2>Travel System</h2>
									<h3>San Andrés de Tumaco, Nariño, CO.</h3>
									<span class="price">Los mejores precios</span>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Viajes</h3>
						<p>Vuela con comodidad al mejor precio</p>
					</div>
				</div>
				<div class="row">
				@foreach($vuelos as $v)						
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="{{ 'images/place-'.$v->id.'.jpg' }}" alt="" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>{{ $v->ruta->origen .' - '. $v->ruta->destino}}</h3>
								<span> {{$v->fecha_1.' - '. $v->fecha_2}}</span>
								<span class="price">{{ '$ '.$v->ruta->precio_base.' COP'}}</span>
								<a class="btn btn-primary btn-outline" href="#">Comprar pasaje <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</div>

		<div id="fh5co-features">
			<div class="container">
				<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Clases</h3>
						<p>Vuela con comodidad al mejor precio</p>
					</div>
				@foreach($clases as $c)
					
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-wine"></i>
							</span>
							<div class="feature-copy">
								<h3>{{ $c->descripcion }}</h3>
								<p>{{ ' + $'. $c->precio_extra}}</p>
						
							</div>
						</div>

					</div>
				@endforeach
				</div>
			</div>
		</div>

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2021
                            <br><i class="icon-heart3"></i> by <a href="#" target="_blank">Travel System</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>