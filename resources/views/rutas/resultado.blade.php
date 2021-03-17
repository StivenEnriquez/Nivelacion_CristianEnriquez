@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <br>
        <h2>{{ $mensaje }}</h2>
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
        <a href="{{ URL::previous() }}" class="btn btn-success">Regresar</a><br>
    </div>
</div
@stop