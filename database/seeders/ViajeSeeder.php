<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruta;
use App\Models\Cliente;
use App\Models\Ticket;
use App\Models\Viaje;
use App\Models\Clase;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ViajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cliente::truncate();
        Ticket::truncate();
    	Ruta::truncate();
        Viaje::truncate();
        Clase::truncate();

        $ruta = new ruta;
        $ruta->origen = "Tumaco";
        $ruta->destino = "Bogotá";
        $ruta->precio_base = 120000;
        $ruta->save();

        $ruta = new ruta;
        $ruta->origen = "Bogotá";
        $ruta->destino = "Cali";
        $ruta->precio_base = 180000;      
        $ruta->save();

        $ruta = new ruta;
        $ruta->origen = "Ipiales";
        $ruta->destino = "Bogotá"; 
        $ruta->precio_base = 150000;      
        $ruta->save();

        $ruta = new ruta;
        $ruta->origen = "Cali";
        $ruta->destino = "Tumaco";
        $ruta->precio_base = 120000;
        $ruta->save();

        $ruta = new ruta;
        $ruta->origen = "Cali";
        $ruta->destino = "Bogotá";
        $ruta->precio_base = 130000;
        $ruta->save();

        $viaje = new viaje;
        $viaje->ruta_id = 1;
        $viaje->fecha_1 = Carbon::now()->addDays(6)->addHours(2);
        $viaje->fecha_2 = Carbon::now()->addDays(6)->addHours(8);
        $viaje->save();

        $viaje = new viaje;
        $viaje->ruta_id = 2;
        $viaje->fecha_1 = Carbon::now()->addDays(4)->addHours(6);
        $viaje->fecha_2 = Carbon::now()->addDays(4)->addHours(9);
        $viaje->save();

        $viaje = new viaje;
        $viaje->ruta_id = 3;
        $viaje->fecha_1 = Carbon::now()->addDays(3)->addHours(2);
        $viaje->fecha_2 = Carbon::now()->addDays(3)->addHours(4);
        $viaje->save();

        $viaje = new viaje;
        $viaje->ruta_id = 5;
        $viaje->fecha_1 = Carbon::now()->addDays(1)->addHours(1);
        $viaje->fecha_2 = Carbon::now()->addDays(1)->addHours(7);
        $viaje->save();

        $viaje = new viaje;
        $viaje->ruta_id = 4;
        $viaje->fecha_1 = Carbon::now()->addDays(2)->addHours(3);
        $viaje->fecha_2 = Carbon::now()->addDays(2)->addHours(5);
        $viaje->save();

        $cliente = new cliente;
        $cliente->nombre = "Juan Enriquez Valdez";
        $cliente->identificacion = "1010233561";
        $cliente->telefono = "3005489080";
        $cliente->save();

        $cliente = new cliente;
        $cliente->nombre = "Eduard Velez Quiñones";
        $cliente->identificacion = "1080233649";
        $cliente->telefono = "3125489001";
        $cliente->save();

        $clase = new clase;
        $clase->descripcion = "Económica";
        $clase->precio_extra = 0;
        $clase->save();

        $clase = new clase;
        $clase->descripcion = "Ejecutiva";
        $clase->precio_extra = 35900;
        $clase->save();

        $clase = new clase;
        $clase->descripcion = "Primera clase";
        $clase->precio_extra = 85900;
        $clase->save();

        $v = Viaje::find(1);
        $c = Clase::find(2);
        $ticket = new ticket;
        $ticket->viaje_id = 1;
        $ticket->cliente_id = 1;
        $ticket->clase_id = 2;
        $ticket->precio_pago = $v->ruta->precio_base + $c->precio_extra;
        $ticket->save();

        $v = Viaje::find(4);
        $c = Clase::find(1);
        $ticket = new ticket;
        $ticket->viaje_id = 4;
        $ticket->cliente_id = 2;
        $ticket->clase_id = 1;
        $ticket->precio_pago = $v->ruta->precio_base + $c->precio_extra;
        $ticket->save();
    }
}
