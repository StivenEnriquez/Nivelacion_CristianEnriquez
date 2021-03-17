@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <br>
        <h2>{{ $mensaje }}</h2>

            Identificación: {{$cliente->identificacion}} <br>
            Nombre: {{$cliente->nombre}} <br>
            Telefono: {{$cliente->telefono}} <br>
        </div>
        <a href="{{ URL::previous() }}" class="btn btn-success">Regresar</a><br>
    </div>
</div>
@stop