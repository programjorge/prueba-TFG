<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\mas_dato;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    public function index(){
        $clientes = DB::table('clientes')->get();
            for ($i=0; $i <count($clientes) ; $i++) { 
                $extras = DB::table('mas_datos')
                ->where('id_cliente' , $clientes[$i]->id)
                ->get();
                $clientes[$i]->casos = $extras;
                // dd($clientes[0]->casos[0]->id_abogado);
                for ($k=0; $k <count($clientes[$i]->casos) ; $k++) { 
                    $abogado = DB::table('empleados')
                    ->where('id' , $clientes[$i]->casos[$k]->id_abogado)
                    ->get();
                    $clientes[$i]->casos[$k]->nombre_abogado = $abogado[0]->nombre;
                } 
            }
        if(!empty($_REQUEST['nombre'])){
            //dd($_REQUEST['nombre']);
            $clientes = $this->Buscar($_REQUEST['nombre']);
            for ($i=0; $i <count($clientes) ; $i++) { 
                $extras = DB::table('mas_datos')
                ->where('id_cliente' , $clientes[$i]->id)
                ->get();
                $clientes[$i]->casos = $extras;
                for ($k=0; $k <count($clientes[$i]->casos) ; $k++) { 
                    $abogado = DB::table('empleados')
                    ->where('id' , $clientes[$i]->casos[$k]->id_abogado)
                    ->get();
                    $clientes[$i]->casos[$k]->nombre_abogado = $abogado[0]->nombre;
                } 
            }
        }else{
            
        }
        //dd($clientes);
        return view('admin',['clientes' => $clientes,'mas_datos'=> $extras]);    }

    public function editar(Request $request){

        $clientes = DB::table('mas_datos')->where('id','=', $request->id)->get();
        $user = DB::table('clientes')->where('id','=',$clientes[0]->id_cliente)->get();
        $abogado_anterior = DB::table('empleados')->where('id','=',$clientes[0]->id_abogado)->get();
        $abogado = DB::table('empleados')->where('id','!=',$clientes[0]->id_abogado)->get();
        //dd($request->macarron);
        return view('editar',['id' => $request->id,'data'=>$clientes, 'user'=>$user,'abogado_anterior'=>$abogado_anterior,'abogado'=>$abogado]);
    }
    public function update(Request $request){
        //dd($request);
        $extras = DB::table('mas_datos')->where('id','=', $request->id)->update([
            'lugar_hechos' => $request->lugar_hechos,
            'lugar_juicio' => $request->lugar,
            'juristiccion' => $request->juristiccion,
            'provincia' => $request->provincia,
            'comunidad'=> $request->comunidad,
            'hora_juicio'=>$request->hora,
            'caso'=>$request->caso,
            'id_abogado'=>$request->abogado,
            'fecha_juicio'=>$request->fecha_juicio
        ]);
        return redirect()->route('admin')->with('success', 'Se han editado los campos correctamente.');
    }
    public function add(Request $request){
        $clientes = DB::table('clientes')->where('id','=', $request->id)->get();
        $abogados = DB::table('empleados')->get();
        //dd($clientes);
        return view('add',['id' => $request->id,'clientes' => $clientes,'abogados'=>$abogados]);
    }
    public function insert(Request $request){
        $clientes = DB::table('mas_datos')->insert([
            'id_cliente'=>$request->id,
            'Lugar_hechos'=>$request->lugar_hechos,
            'lugar_juicio'=>$request->lugar,
            'juristiccion'=>$request->juristiccion,
            'provincia'=>$request->provincia,
            'comunidad'=>$request->comunidad,
            'hora_juicio'=>$request->hora,
            'caso'=>$request->caso,
            'id_abogado'=>$request->abogado,
            'fecha_juicio'=>$request->fecha_juicio
        ]);
        //dd($request);
        return redirect()->route('admin')->with('success', 'Se han añadido los campos correctamente.');
    }
    public function Buscar($nombre){
        $clientes = DB::table('clientes')->where('nombre','=',$nombre)->get();
        
        return $clientes;
    }
    public function delete(Request $request){
        $datos = DB::table('mas_datos')->where('id','=',$request->id)->delete();
        return redirect()->route('admin')->with('success', 'Se ha eliminado el campo correctamente.');
    }
}
