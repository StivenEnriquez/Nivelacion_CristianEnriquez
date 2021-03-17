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
										<a href="#clientes" aria-controls="clientes" role="tab" data-toggle="tab">Clientes</a>
									</li>
                                    <li role="presentation">
										<a href="#clientes_consulta" aria-controls="clientes_consulta" role="tab" data-toggle="tab">Consulta</a>
									</li>
								</ul>
								   <!-- Tab panes -->
									<div class="tab-content">

										<div role="tabpanel" class="tab-pane active" id="clientes">
										<div class="row justify-content-center">
											<h1> Listado de Clientes </h1><br>
									
												<table class="table">
													<thead>
														<tr>
															<th scope="col">Nombre</th>
															<th scope="col">Cédula de Ciudadanía</th>
															<th scope="col">Teléfono</th>
															<th scope="col" colspan=1></th>
														</tr>
													</thead>
													<tbody>
													@foreach($clientes as $c)
													<tr>
														<td>{{ $c->nombre }}</td>
														<td>{{ $c->identificacion }}</td>
														<td>{{ $c->telefono }}</td>
														<td> <a href="{{ route('form_actualizar_cliente',$c->id) }}"
														class="btn btn-primary">Actualizar</a></td>
													</tr>
													@endforeach
													</tbody>
												</table>
										</div>
										</div>

                                        <div role="tabpanel" class="tab-pane" id="clientes_consulta">
                                        <form id="form-submit" action="{{ route('consulta_cliente') }}" method="post">
										@csrf
										 	<div class="container row justify-content-center"><h1> Consulta de Clientes </h1>
											<br><br>
                                         	<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="consulta">Identificación de Cliente:</label>
													<input name="consulta" type="text" class="form-control" id="consulta" placeholder="1087225689" required>
												</div>
											</div>
											<div class="col-xs-10">
												<input type="submit" class="col-12 btn btn-primary btn-block" value="Buscar cliente">
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
