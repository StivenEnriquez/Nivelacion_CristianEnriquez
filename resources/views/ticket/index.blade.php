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
										<a href="#tickets" aria-controls="tickets" role="tab" data-toggle="tab">Tickets</a>
									</li>
								</ul>
								   <!-- Tab panes -->
									<div class="tab-content">

										<div role="tabpanel" class="tab-pane active" id="tickets">
										<div class="row justify-content-center">
											<h1> Listado de Tickets </h1></br>
									
												<table class="table">
													<thead>
														<tr>
														<th scope="col">Vuelo</th>
														<th scope="col">Fecha </th>
														<th scope="col">Clase </th>
														<th scope="col">Cliente </th>
														<th scope="col">Precio </th>
															<th scope="col" colspan=1></th>
														</tr>
													</thead>
													<tbody>
													@foreach($tickets as $c)
													<tr>
													<td>{{ $c->viaje->ruta->origen }} - {{ $c->viaje->ruta->destino }}</td>
													<td>{{ $c->viaje->fecha_1 }} </td>
													<td>{{ $c->clase->descripcion }}</td>
													<td>{{ $c->cliente->nombre }}</td>
													<td>{{ ' $'.$c->precio_pago.' COP'}}</td>
														<td> <a href="{{ route('facturar',$c->id) }}"
														class="btn btn-primary">FacturaPDF</a></td>
													</tr>
													@endforeach
													</tbody>
												</table>
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
