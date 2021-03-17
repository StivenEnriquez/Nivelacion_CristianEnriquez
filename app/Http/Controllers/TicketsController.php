<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Ticket;
use App\Models\Clase;
use App\Models\Viaje;

class TicketsController extends Controller
{
    //
    public function index(){
        $t = ticket::all();
        return view('ticket.index',[ 'tickets'=>$t ]);
    }

    public function registrar(Request $request){
       
        $viaje_id = $request->input('viaje_id');
        $clase_id = $request->input('clase_id');
        $id = $request->input('id');

        $cliente = DB::table('clientes')
                    ->where('identificacion','=',$id)
                    ->first();
        if($cliente){
            $ticket = new ticket();

            $viaje = Viaje::find($viaje_id);
            $clase = Clase::find($clase_id);

            $ticket->viaje_id = $viaje->id;
            $ticket->clase_id = $clase->id;
            $ticket->cliente_id = $cliente->id;
            $ticket->precio_pago = $viaje->ruta->precio_base + $clase->precio_extra;
            $ticket->save();

            return view('ticket.comprado',[
                'viaje' => $viaje, 
                'clase' => $clase, 
                'cliente' => $cliente, 
                'ticket' =>$ticket]);
        }
        else{
            $mensaje = 'No estás registrado, registrate e intenta nuevamente.';
            return view('ticket.no_registrado',[ 
                'mensaje' => $mensaje]);
        }
        
    }
    public function comprado(){
       
        return view('ticket.comprado');
    }
    public function facturar($id){
       
        $ticket = Ticket::findOrFail($id);
        $pdf = \PDF::loadView('ticket.facturar', [
            'viaje' => viaje::findOrFail($ticket->viaje_id),
            'clase' => clase::findOrFail($ticket->clase_id),
            'cliente' => cliente::findOrFail($ticket->cliente_id),
            'ticket' =>$ticket]);
        return $pdf->download('factura.pdf');
    }
}
