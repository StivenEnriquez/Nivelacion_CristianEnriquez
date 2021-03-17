<?php
    $fecha = date("Y-m-d");
?>

<div align="center" class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
<div  class="container-fluid">
    <div class="row">
        <div class="col-xs-10">
            <h1 id="fh5co-logo"><a><i class="icon-airplane"></i>Travel System</a></h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-2 text-center">
            <strong>Fecha</strong>
            <br>
            <?php echo $fecha ?>
            <br>
            <strong>Factura No.</strong>
            <br>
            {{ $ticket->id }}
        </div>
    </div>
    <hr>
    <div class="row text-center"  style="margin-bottom: 2rem;">
        <div class="col-xs-6">
            <h1 class="h2">Cliente</h1>
            <strong>{{ $cliente->nombre }} - C.C. {{ $cliente->identificacion }}</strong><br>
            
            <p>{{ $cliente->telefono }}</p>
        </div>
    </div>
    <div class="row text-center" style="margin-bottom: 2rem;">
        <div class="col-xs-6">
            <h1 class="h2">Vuelo de Clase {{ $clase->descripcion }}</h1> 
            <strong>{{ $viaje->ruta->origen }} - {{ $viaje->ruta->destino }}</strong>
            <p>{{ $viaje->fecha_1 }} - {{ $viaje->fecha_2 }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table align="center" border=1 class="table table-condensed table-bordered table-striped">
                <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Subtotal</td>
                    <td>$ {{ number_format($viaje->ruta->precio_base, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Clase</td>
                    <td>$ {{ number_format($clase->precio_extra, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">
                        <h4>Total</h4></td>
                    <td>
                        <h4>{{ ' $'.number_format($ticket->precio_pago, 2).' COP'}}</h4>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <p class="h5">Gracias por su compra...</p>
        </div>
    </div>
</div>
</div>
</div>
</div>