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
								</ul>
								   <!-- Tab panes -->
									<div class="tab-content">

                                    <div role="tabpanel" class="tab-pane active" id="cliente">
									 	<div class="row">
										 <form id="form-submit" action="{{route('actualizar_cliente',$cliente->id )}}" method="post">
                               			 @csrf
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
												</br>
													<label for="nombre">Nombre:</label>
													<input type="text" class="form-control" name="nombre"id="nombre" 
                                                    value="{{$cliente->nombre}}"placeholder="Escribe tu nombre..."
													required>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="id">Cédula de Ciudadanía:</label>
													<input name="id" type="text" value="{{$cliente->identificacion}}"
                                                    class="form-control" id="id" placeholder="Escribe tu identificación..."
													required>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="telefono">Telefono:</label>
													<input name="telefono" type="text" class="form-control" id="telefono-place" placeholder="Numero de contacto..."
													value="{{$cliente->telefono}}" required>
												</div>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Actualizar cliente">
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
