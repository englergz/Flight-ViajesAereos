<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PasajeModel; 
use App\Models\VueloModel; 
use App\Models\RutaModel; 
use App\Exports\CategoriasExport;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;


class PasajesController extends Controller
{
    //
    public function index(){
        /*$pasajes = DB::table('pasaje')
                    ->join('vuelo', 'pasaje.id_vuelo', '=', 'vuelo.id')
                    ->join('ruta', 'vuelo.id_ruta', '=', 'ruta.id')
                    ->join('cliente', 'pasaje.id_cliente', '=', 'cliente.id')
                    ->get();*/
        $pasajes =  PasajeModel::get();
        return view('admin.pasaje.pasajes',['pasajes' => $pasajes] );
    }

    public function form($id){
        $vuelo = VueloModel::findOrFail($id);
        $ruta = RutaModel::findOrFail($id);
        return view('admin.pasaje.comprar',['vuelo' => $vuelo,'ruta' => $ruta]);
    }

    public function comprar(Request $request){
       
        $vuelo = $request->input('vuelo');
        $cc = $request->input('cliente');
        return redirect()->route('formCliente',[$cc, $vuelo]);
       
    }

    public function descargarPDF(){
        $pasajes = PasajeModel::all();
        $pdf = \PDF::loadView('admin.pasaje.reportePDF', ['pasajes' => $pasajes]);
        return $pdf->download('pasajes.pdf');
    }
    public function factura($id){
       
        $p = PasajeModel::findOrFail($id);
        $pdf = \PDF::loadView('admin.pasaje.factura', ['p' => $p]);
        return $pdf->download('factura'.$p->cliente->CC.'.pdf');
    }
}
