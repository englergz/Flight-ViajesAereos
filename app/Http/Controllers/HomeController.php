<?php

namespace App\Http\Controllers;

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
        $destino = DB::table('ruta')
                    ->distinct()
                    ->get();

        $origen = DB::table('ruta')
        ->select('origen','origen_descripcion')
        ->distinct()
        ->get();

        $destinos = DB::table('ruta')
        ->select('destino','destino_descripcion')
        ->distinct()
        ->get();

        return view('welcome',['destinos'=>$destino,'origen'=>$origen,'destino'=>$destinos ]);
    }
}
