<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Ticket;
use App\Models\Clase;
use App\Models\Viaje;
use App\Models\Ruta;

class RutasController extends Controller
{
    public function index(){
        $r = ruta::all();
        return view('rutas.index',[ 'ruta'=>$r ]);
    }
    public function registrar(Request $request)
    {
        $ruta = new Ruta();
        $ruta->origen = $request->input('origen');
        $ruta->destino = $request->input('destino');
        $ruta->precio_base = $request->input('precio_base');
        $ruta->save();
        return redirect()->route('home'); 
    }
    public function form_actualizar($id){
        $ruta = ruta::findOrFail($id);
        return view('rutas.form_actualiza',compact('ruta'));
    }

    public function actualizar(Request $request, $id)
    {
        $c = ruta::findOrFail($id);
        $c->origen = $request->input('origen');
        $c->destino = $request->input('destino');
        $c->precio_base = $request->input('precio_base');
        $c->save();
        return redirect()->route('rutas');  
    }

    public function consultar(Request $request){

        $od = $request->input('consulta');
        $ruta = ruta::where('origen', 'like', $od)
                            ->orWhere('destino', 'like', $od)
                            ->get();
        if($ruta){
            $m = 'Rutas con origen o destino a "'.$od.'"';
            return view('rutas.resultado',['ruta' => $ruta, 'mensaje' => $m]);
        }else{
            $m = 'No se encuentra ninguna ruta con el origen o destino"'.$od.'"';
            return view('rutas.mensaje', ['mensaje' => $m]);
        }  
        
    }

}
