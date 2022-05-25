<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class imprimir extends Controller
{
    public function index(){
        return view('formtarjet');
    }
    public function imprimir(Request $request){
        //dd($request);
        $datos = [
            'nombre'=> $request->nombre,
            'espec'=>$request->espec,
            'Toficina'=>$request->Toficina,
            'Tmovil'=>$request->Tmovil,
            'email'=>$request->email,
            'colegio'=>$request->colegio
        ];
        $pdf = PDF::loadView('imprimir',$datos);
        
        // redirect()->route('tarjetas')->with('success', 'GTV generado correctamente');
        return $pdf->download('prueba.pdf');
    }
}
