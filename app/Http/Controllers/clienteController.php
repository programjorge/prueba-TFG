<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class clienteController extends Controller
{
    public function cliente(Request $request){
        $clientes = DB::table('clientes')->insert([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'email'=>$request->email,
        ]);
        //dd($request);
        return redirect()->route('cliente')->with('success', 'Te contactaremos por email lo antes posible');
    }
}
