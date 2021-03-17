@extends('layouts.app')

@section('content')
<div class="fh5co-hero1">
	<div class="fh5co-overlay">
		<div class="fh5co-cover" data-stellar-background-ratio="0.1" style="background-image: url();">
			<div class="desc">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-sm-12 col-md-12">
							<div class="tabulation animate-box">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active">
										<a href="#rutas_actualiza" aria-controls="rutas_actualiza" role="tab" data-toggle="tab">Aactualiza</a>
									</li>
								</ul>
								   <!-- Tab panes -->
									<div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="rutas_actualiza">
                                        
										<div class="container row justify-content-center"><h1>Actualización de Ruta </h1>
											<br><br>
                                            <form id="form-submit" action="{{route('actualizar_ruta', $ruta->id )}}" method="post">
                               			 @csrf
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="origen">Origen:</label>
													<input name="origen" type="text" class="form-control" id="origen" placeholder="Bogotá"
													value="{{$ruta->origen}}" required/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="destino">Destino:</label>
													<input name="destino" type="text" class="form-control" id="destino" 
													value="{{$ruta->destino}}"placeholder="Tokyo, Japon" required/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="precio_base">Precio base:</label>
													<input name="precio_base" type="text" 
													value="{{$ruta->precio_base}}" class="form-control" id="precio_base" placeholder="120000" required/>
												</div>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Actuallizar ruta">
											</div>
                                            </form>
										</div>
									 	</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
