<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VueloModel;
use App\Models\RutaModel;

class VuelosController extends Controller
{
    //
    public function index(){
        $vuelos = VueloModel::all();
        /*$vuelos = DB::table('vuelo')
                    ->join('ruta', 'vuelo.id_ruta', '=', 'ruta.id')
                    ->get();*/
        
        return view('admin.vuelo.vuelos',['vuelos' => $vuelos] );
    }
    public function buscar(Request $request){

        $o = $request->input('origen');
        $d = $request->input('destino');
        //$f = $request->input('fecha');
        //SELECT * FROM `vuelo` 
        //INNER JOIN ruta on id_ruta= ruta.id 
        //where origen = 'TCO' and destino_descripcion='Medellin' and fecha_salida like '2021%'
        $vuelos = DB::table('vuelo')
                    ->join('ruta', 'id_ruta', '=', 'ruta.id')
                    ->where('origen_descripcion', '=', $o)
                    ->where('destino_descripcion', '=', $d)
                     ->get();
            
        if(VueloModel::join('ruta', 'id_ruta', '=', 'ruta.id')->where('origen_descripcion', '=', $o)->exists() &&
        VueloModel::join('ruta', 'id_ruta', '=', 'ruta.id')->where('destino_descripcion', '=', $d)->exists() )
        {
            return view('admin.vuelo.buscar', ['vuelos' => $vuelos,'o'=>$o,'d'=>$d]);
        }
        else
            return redirect()->route('home')->with('flash', 'No hay vuelos disponibles con estas espeficicaciones, consulta los vuelos disponibles');
    
   
    }
    public function consulta(){
        $vuelosALL = VueloModel::all();
        return view('admin.vuelo.mensaje', ['vuelosALL' => $vuelosALL]);
    }

    public function form(){
        $rutas = RutaModel::all();
        return view('admin.vuelo.crear',['rutas' => $rutas]);
    }

    public function crear(Request $request)
    {
        //Registro de una vuelo
        $vuelo = new VueloModel();
        $vuelo->id_ruta = $request->input('ruta');
        $vuelo->fecha_salida  = $request->input('salida');
        $vuelo->fecha_llegada = $request->input('llegada');
        $vuelo->save();
        return redirect()->route('vuelos'); 
        
    }
    public function editar($id){
        // Funcion que genera el formulario de actualizacion con base seleccionada
        $rutas = RutaModel::all();
        $vuelo = VueloModel::findOrFail($id);
        return view('admin.vuelo.editar',['vuelo'=>$vuelo,'rutas' => $rutas]);
    }

    public function actualizar(Request $request, $id)
    {
        $v = VueloModel::findOrFail($id);
        $v->id_ruta = $request->input('ruta');
        $v->fecha_salida  = $request->input('salida');
        $v->fecha_llegada = $request->input('llegada');
        $v->save();
        return redirect()->route('vuelos');  
    }
}
