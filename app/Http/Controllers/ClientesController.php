<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Ticket;
use App\Models\Clase;
use App\Models\Viaje;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes' => $clientes] );
    }

    public function form_registro($cc, $vuelo){
        $cliente = DB::table('cliente')
                    ->where('CC','=',$cc)
                    ->first();
        return view('admin.cliente.crear',['cliente' => $cliente, 'cc' => $cc ,'vuelo' => $vuelo ]);
    }
        

    public function registrar(Request $request)
    {

        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->identificacion  = $request->input('identificacion');
        $cliente->telefono = $request->input('telefono');
        $cliente->save();
        

        $mensaje = 'Registro realizado exitosamente';
        return view('clientes.mensaje', ['cliente' => $cliente, 'mensaje' => $mensaje]);
    }
    public function form_actualizar($id){
        // Funcion que genera el formulario de actualizacion con base seleccionada
        $cliente = Cliente::findOrFail($id);
        return view('clientes.form_actualiza',compact('cliente'));
    }

    public function actualizar(Request $request, $id)
    {
        $c = Cliente::findOrFail($id);
        
        $c->nombre  = $request->input('nombre');
        $c->identificacion = $request->input('id');
        $c->telefono = $request->input('telefono');
        $c->save();
        return redirect()->route('clientes');  
    }

    public function consultar(Request $request){

        $id = $request->input('consulta');
        $cliente = Cliente::where('identificacion', 'like', $id)->first();
        
        if($cliente){
            $m = 'Cliente identificación con cedula de cuidadanía"'.$id.'"';
            return view('clientes.resultado', ['cliente' => $cliente, 'mensaje' => $m]);
         }else{
            $mensaje = 'No se encuentra ningún cliente con la identificación"'.$id.'"';
            return view('clientes.mensaje', ['mensaje' => $mensaje]);
         }    
    }

}
