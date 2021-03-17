@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <br> <br>
        <h1> Compra de ticket realizada exitosamente</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Vuelo</th>
                    <th scope="col">Fecha </th>
                    <th scope="col">Clase </th>
                    <th scope="col">Cliente </th>
                    <th scope="col">Precio </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{ $viaje->ruta->origen }} - {{ $viaje->ruta->destino }}</td>
                <td>{{ $viaje->fecha_1 }} </td>
                <td>{{ $clase->descripcion }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ ' $'.$ticket->precio_pago.' COP'}}</td>
            </tr>
            </tbody>
        </table>
        
        </div>
        <a href="{{ route('facturar',$ticket->id) }}" class="btn btn-success">Imprimir factura</a><br>
    </div>
</div>
@endsection