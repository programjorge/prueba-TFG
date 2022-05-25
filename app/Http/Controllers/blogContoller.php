<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogContoller extends Controller
{
    public function index(){
        $preguntas = DB::table('blog')->get();
        $respuestas = DB::table('blog_respuestas')->get();
        return view('blog',['preguntas'=>$preguntas,'respuestas'=>$respuestas]);
    }
    public function ask(Request $request){
        $preguntas = DB::table('blog')->insert([
            'titulo'=>$request->titulo,
            'texto'=>$request->pregunta
        ]);
        //dd($request);
        return redirect()->route('blog')->with('success', 'Se han añadido los campos correctamente.');
    }
    public function res(Request $request){
        $respuestas = DB::table('blog_respuestas')->insert([
            'id_pregunta'=>$request->id_pregunta,
            'respuesta'=>$request->respuesta
        ]);
        //dd($request);
        return redirect()->route('blog')->with('success', 'Se ha respondido correctamente.');
    }
}
