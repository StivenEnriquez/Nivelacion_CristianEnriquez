<?php

namespace App\Http\Controllers;
use App\Models\Viaje;
use App\Models\Clase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $v = viaje::all();
        $c = clase::all();
        return view('home',['vuelos'=>$v , 'clases'=>$c]);
    }
}
