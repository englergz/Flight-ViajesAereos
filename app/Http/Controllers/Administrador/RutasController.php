<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RutaModel; 

class RutasController extends Controller
{
    //
    public function index(){
        $rutas = RutaModel::all();
        return view('admin.ruta.rutas',['rutas' => $rutas] );
    }

    public function buscar(Request $request){
        $nombre  = $request->input('nombre');
        $rutas = RutaModel::where('origen_descripcion', 'like', '%'.$nombre.'%')
                            ->orWhere('destino_descripcion', 'like', '%'.$nombre.'%')
                            ->get();
                
        if(RutaModel::where('origen_descripcion', 'like', '%'.$nombre.'%')->exists() ||
        RutaModel::Where('destino_descripcion', 'like', '%'.$nombre.'%')->exists() )
        {
            return view('admin.ruta.buscar', ['rutas' => $rutas, 'ruta' => $nombre]);
        }
        else
            return view('admin.ruta.mensaje', ['rutas' => $rutas, 'ruta' => $nombre]);

    }

    public function form(){
        return view('admin.ruta.crear');
    }

    public function crear(Request $request)
    {
        //Registro de una ruta
        $ruta = new RutaModel();
        $ruta->origen = $request->input('origen');
        $ruta->origen_descripcion  = $request->input('origen_descripcion');
        $ruta->destino = $request->input('destino');
        $ruta->destino_descripcion  = $request->input('destino_descripcion');
        $ruta->precio = $request->input('precio');
        $ruta->foto = $request->input('foto');
        $ruta->save();
        return redirect()->route('rutas'); 
    }
    public function editar($id){
        // Funcion que genera el formulario de actualizacion con base seleccionada
        $ruta = rutaModel::findOrFail($id);
        return view('admin.ruta.editar',compact('ruta'));
    }

    public function actualizar(Request $request, $id)
    {
        $c = rutaModel::findOrFail($id);
        $c->origen = $request->input('origen');
        $c->origen_descripcion  = $request->input('origen_descripcion');
        $c->destino = $request->input('destino');
        $c->destino_descripcion  = $request->input('destino_descripcion');
        $c->precio = $request->input('precio');
        $c->foto = $request->input('foto');
        $c->save();
        return redirect()->route('rutas');  
    }

    public function eliminar($id)
    {
        $c = rutaModel::findOrFail($id);
        $c->delete();
        return redirect()->route('rutas');
    }
}
