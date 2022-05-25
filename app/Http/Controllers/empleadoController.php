<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class empleadoController extends Controller
{
    public function index(){
        $empleados = DB::table('empleados')->get();
        return view('empleado',['empleados' => $empleados]);
    }
    public function editar(Request $request){
        $empleado = DB::table('empleados')->where('id','=', $request->id)->get();
        return view('editarabog',['empleado' => $empleado]);
    }
    public function update(Request $request){
        //dd($request);
        $extras = DB::table('empleados')->where('id','=', $request->id)->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'foto' => $request->foto,
            'telefono' => $request->telefono,
            'email'=> $request->email,
            'especializacion'=>$request->especializacion
        ]);
        return redirect()->route('empleado')->with('success', 'Se han editado los campos correctamente.');
    }
    public function delete(Request $request){
        $datos = DB::table('empleados')->where('id','=',$request->id)->delete();
        return redirect()->route('empleado')->with('success', 'Se ha eliminado el campo correctamente.');
    }
    public function add(Request $request){
        return view('addabog');
    }
    public function insert(Request $request){
        $clientes = DB::table('empleados')->insert([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'foto'=>$request->foto,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'especializacion'=>$request->especializacion,
        ]);
        return redirect()->route('empleado')->with('success', 'Se han añadido el empleado correctamente.');
    }
}
