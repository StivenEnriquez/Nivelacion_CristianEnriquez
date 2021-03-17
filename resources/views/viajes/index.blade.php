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
									<a href="#viajes_listado" aria-controls="viajes_listado" role="tab" data-toggle="tab">Viajes</a>
									</li>
									<li role="presentation">
										<a href="#viajes_registro" aria-controls="viajes_registro" role="tab" data-toggle="tab">Nuevo</a>
									</li>
								</ul>
								   <!-- Tab panes -->
									<div class="tab-content">

										<div role="tabpanel" class="tab-pane active" id="viajes_listado">
											<div class="row justify-content-center">
												<h1> Listado de Vuelos </h1><br>
									
												<table class="table">
													<thead>
														<tr>
														<th scope="col">Ruta</th>
														<th scope="col">Fecha de salida </th>
														<th scope="col">Fecha de llegada </th>
														<th scope="col" colspan=1></th>
														</tr>
													</thead>
													<tbody>
													@foreach($vuelos as $c)
													<tr>
													<td>{{ $c->ruta->origen }} - {{ $c->ruta->destino }}</td>
													<td>{{ $c->fecha_1 }} </td>
													<td>{{ $c->fecha_2 }} </td>>
														<td> <a href="{{ route('form_actualizar_viaje',$c->id) }}"
														class="btn btn-primary">Actualizar</a></td>
													</tr>
													@endforeach
													</tbody>
												</table>
											</div>
										</div>

										<div role="tabpanel" class="tab-pane" id="viajes_registro">
									 	<div class="row justify-content-center">
                                         <h1> Registro de vuelos </h1><br>
                                         <form id="form-submit" action="{{route('registro_viaje' )}}" method="post">
                               			 @csrf
											<div class=" col-sm-12 col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<section>
													<label for="ruta_id">Ruta:</label>
													<select required name='ruta_id' id="ruta_id" onchange='this.form.()' class="cs-select cs-skin-border">
													@foreach($rutas as $r)
														<option value="{{ $r->id }}">
														{{ $r->origen .' - '. $r->destino }}
														</option>
													@endforeach
													</select>
													</section>
												</div>
											</div>

											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="f_salida">Fecha de salida:</label>
													<input name="f_salida" type="date" class="form-control date" id="f_salida" placeholder="mm/dd/yyyy"
                                                    value="{{ $Carbon->format('Y-m-d') }}" required>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="h_s">Hora:</label>
													<input name="h_s" type="time" class="form-control date" id="h_s" placeholder="mm/dd/yyyy"
                                                    value="{{ $Carbon->format('H:i') }}" required>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="f_llegada">Fecha de llegada:</label>
													<input name="f_llegada" type="date" class="form-control date" id="f_llegada" placeholder="mm/dd/yyyy"
                                                    value="{{ $Carbon->format('Y-m-d') }}" required>
												</div>
											</div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="h_l">Hora de llegada:</label>
													<input name="h_l" type="time" class="form-control date" id="h_l" placeholder="mm/dd/yyyy"
                                                    value="{{ $Carbon->format('H:i') }}" required>
												</div>
											</div>
											
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Registrar vuelo">
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
