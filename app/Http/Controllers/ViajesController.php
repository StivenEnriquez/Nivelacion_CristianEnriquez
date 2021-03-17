<?php

namespace App\Http\Controllers;
use App\Models\Viaje;
use App\Models\Ruta;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ViajesController extends Controller
{
    public function index(){
        $v = viaje::all();
        $r = ruta::all();
        return view('viajes.index',['vuelos'=>$v ,'rutas'=>$r , 'Carbon'=> Carbon::now()] ); 
    }

    public function registrar(Request $request)
    {
        $viaje = new viaje();
        $viaje->ruta_id = $request->input('ruta_id');
        $viaje->fecha_1 = Carbon::parse( $request->input('f_salida')."". $request->get('h_s')); //date("Y-m-d", strtotime($fecha));
        $viaje->fecha_2 = Carbon::parse( $request->input('f_llegada')."". $request->get('h_l')); 
        $viaje->save();
        return redirect()->route('viajes'); 
    }

    public function form_actualizar($id){
        // Funcion que genera el formulario de actualizacion con base seleccionada
        $rutas = Ruta::all();
        $vuelo = viaje::findOrFail($id);
        $fecha_1 = Carbon::parse($vuelo->fecha_1)->format('Y-m-d');
        $hora_1 = Carbon::parse($vuelo->fecha_1)->format('H:i');
        $fecha_2 = Carbon::parse($vuelo->fecha_2)->format('Y-m-d');
        $hora_2 = Carbon::parse($vuelo->fecha_2)->format('H:i');
        return view('viajes.form_actualiza',[
            'fecha_1'=>$fecha_1,
            'hora_1'=>$hora_1,
            'fecha_2'=>$fecha_2,
            'hora_2'=>$hora_2,
            'rutas' => $rutas,
            'vuelo'=>$vuelo]);
    }

    public function actualizar(Request $request, $id)
    {
        $viaje = Viaje::findOrFail($id);
        $viaje->ruta_id = $request->input('ruta_id');
        $viaje->fecha_1 = Carbon::parse( $request->input('f_salida')."". $request->get('h_s'));
        $viaje->fecha_2 = Carbon::parse( $request->input('f_llegada')."". $request->get('h_l')); 
        $viaje->save();
        return redirect()->route('viajes');  
    }
}
