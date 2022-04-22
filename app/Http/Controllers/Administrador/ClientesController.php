<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ClienteModel;
use App\Models\PasajeModel;
use Illuminate\Support\Facades\Auth;

class ClientesController extends Controller
{
    //
    public function index(){
        $clientes = ClienteModel::all();
        return view('admin.cliente.clientes', ['clientes' => $clientes] );
    }
    public function contacto(){
        return view('contact');
    }
    public function buscar(Request $request){
        $nombre  = $request->input('nombre');
        $clientes = ClienteModel::where('nombre', 'like', '%'.$nombre.'%')
        ->orWhere('CC', 'like', '%'.$nombre.'%')->get();

        if(ClienteModel::where('nombre', 'like', '%'.$nombre.'%')->exists() ||
        ClienteModel::Where('CC', 'like', '%'.$nombre.'%')->exists() )
        {
            return view('admin.cliente.buscar', ['clientes' => $clientes, 'cliente' => $nombre]);
        }
        else
            return view('admin.cliente.mensaje', [ 'cliente' => $nombre]);

        
    }

    public function form($cc, $vuelo){
        $cliente = DB::table('cliente')
                    ->where('CC','=',$cc)
                    ->first();
        return view('admin.cliente.crear',['cliente' => $cliente, 'cc' => $cc ,'vuelo' => $vuelo ]);
    }

    public function form_cliente(Request $request, $c){

        if($c){
            $c = ClienteModel::findOrFail($c->id);
            $c->CC = $request->input('cc');
            $c->nombre  = $request->input('nombre');
            $c->celular = $request->input('celular');
            $c->save();
            }
            else{
                $c = new ClienteModel();
                $c->CC = $request->input('cc');
                $c->nombre  = $request->input('nombre');
                $c->celular = $request->input('celular');
                $c->save();
            }
            return redirect()->route('clientes')->with('flash', '¡Registro!');
       
    }
        
    public function crear_cliente(Request $request)
    {
        $cc = $request->input('cc');
        $cliente = DB::table('cliente')
        ->where('CC','=',$cc)
        ->first();

        return view('admin.cliente.registro',['cliente' => $cliente, 'cc' => $cc  ]);
       
    } 
    public function crear(Request $request, $cc ,$vuelo)
    {
        $c = DB::table('cliente')
                    ->where('CC','=',$cc)
                    ->first();
        if($c){
        $c = ClienteModel::findOrFail($c->id);
        $c->CC = $request->input('cc');
        $c->nombre  = $request->input('nombre');
        $c->celular = $request->input('celular');
        $c->save();
        }
        else{
            $c = new ClienteModel();
            $c->CC = $request->input('cc');
            $c->nombre  = $request->input('nombre');
            $c->celular = $request->input('celular');
            $c->save();
        }

        $p = new PasajeModel();
        $p->id_vuelo = $vuelo;
        $p->id_cliente = $c->id;
        $p->save();
       // $cc = $request->input('cliente');
        if(Auth::user()){
            return redirect()->route('vuelos')->with('flash', '¡Venta exitosa!');
        }else{
            //$vuelosALL = VueloModel::all();
            // consultaVuelo
            //return redirect('admin.vuelo.mensaje', ['vuelosALL' => $vuelosALL])->with('flash', '¡Compra exitosa!');
            return view('admin.cliente.compra',compact('p'))->with('flash', '¡Compra exitosa!');
        }
        //Registro de una cliente
        
        
        //return redirect('pasajes/factura/'.$p->id)->with('flash', '¡Compra exitosa!');
    } 
    public function editar($id){
        // Funcion que genera el formulario de actualizacion con base seleccionada
        $cliente = ClienteModel::findOrFail($id);
        return view('admin.cliente.editar',compact('cliente'));
    }

    public function actualizar(Request $request, $id)
    {
        $c = ClienteModel::findOrFail($id);
        $c->CC = $request->input('cc');
        $c->nombre  = $request->input('nombre');
        $c->celular = $request->input('celular');
        $c->save();
        return redirect()->route('clientes');  
    }
    public function eliminar($id)
    {
        $c = ClienteModel::findOrFail($id);
        $c->delete();
        return redirect()->route('clientes');
    }
}
