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
										<a href="#rutas" aria-controls="rutas" role="tab" data-toggle="tab">Rutas</a>
									</li>
									<li role="presentation">
										<a href="#rutas_registro" aria-controls="rutas_registro" role="tab" data-toggle="tab">Nueva</a>
									</li>
									<li role="presentation">
										<a href="#rutas_consulta" aria-controls="rutas_consulta" role="tab" data-toggle="tab">Consulta</a>
									</li>
								</ul>
								   <!-- Tab panes -->
									<div class="tab-content">

										<div  role="tabpanel" class="tab-pane active" id="rutas">
										<div class="row justify-content-center">
											<h1> Listado de Rutas </h1><br>
									
												<table align="center" class="table">
													<thead>
														<tr>
															<th scope="col">Origen</th>
															<th scope="col">Destino</th>
															<th scope="col">Precio</th>
															<th scope="col" colspan=1></th>
														</tr>
													</thead>
													<tbody>
													@foreach($ruta as $r)
													<tr>
														<td>{{ $r->origen }}</td>
														<td>{{ $r->destino }}</td>
														<td>{{ $r->precio_base }}</td>
														<td> <a href="{{ route('form_actualizar_ruta',$r->id) }}"
														class="btn btn-primary">Actualizar</a></td>
													</tr>
													@endforeach
													</tbody>
												</table>
										</div>
										</div>

                                        <div role="tabpanel" class="tab-pane " id="rutas_registro">
                                        
										<div class="container row justify-content-center"><h1> Registro de Rutas </h1>
											<br><br>
                                            <form id="form-submit" action="{{route('registro_ruta' )}}" method="post">
                               			 @csrf
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="origen">Origen:</label>
													<input name="origen" type="text" class="form-control" id="origen" placeholder="Bogotá" required/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="destino">Destino:</label>
													<input name="destino" type="text" class="form-control" id="destino" placeholder="Tokyo, Japon" required/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="precio_base">Precio base:</label>
													<input name="precio_base" type="text" class="form-control" id="precio_base" placeholder="120000" required/>
												</div>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Registrar ruta">
											</div>
                                            </form>
										</div>
									 	</div>

										 <div role="tabpanel" class="tab-pane" id="rutas_consulta">
										 <form id="form-submit" action="{{route('consulta_ruta' )}}" method="post">
										 <div class="container row justify-content-center"><h1> Consulta de Rutas </h1>
											<br><br>
											<br><br>
                                            
                               			 		@csrf
												<div class="col-xxs-12 col-xs-8 mt">
													<div class="input-field">
														<label for="consulta">Ruta:</label>
														<input name = "consulta"type="text" class="form-control" id="consulta" required 
														placeholder="Bogotá "/>
													</div>
												</div>
												<div class="col-xs-8">
													<input type="submit" class="btn btn-primary btn-block" value="Consultar ruta">
												</div>
												
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
@endsection
