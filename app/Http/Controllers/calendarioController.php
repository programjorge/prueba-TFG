<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class calendarioController extends Controller
{
    public function index(){
        $tabla = DB::table('mas_datos')->get();
        $cliente = DB::table('clientes')->get();
        $fechas = [];
        for ($i=0; $i < count($tabla); $i++) { 
            $stringSeparado = explode('-', $tabla[$i]->fecha_juicio);
            for ($k=0; $k < count($cliente) ; $k++) { 
                if($tabla[$i]->id_cliente == $cliente[$k]->id ){
                    $arr= ['año'=> $stringSeparado[0],'mes'=>$stringSeparado[1],'dia'=>$stringSeparado[2],'nombre'=>$cliente[$k]->nombre];
                    array_push($fechas,$arr);
                }
            }
        }
        
        $month = date("Y-m");
        $data = $this->calendar_month($month);
        $mes = $data['month'];
        // obtener mes en espanol
        
        $mespanish = $this->spanish_month($mes);
        $mes = $data['month']; 
        switch($mespanish){
            case "Enero": $mesNum = "01";
            break;
            case "Febrero":$mesNum = "02";
            break;
            case "Marzo":$mesNum = "03";
            break;
            case "Abril": $mesNum = "04";
            break;
            case "Mayo": $mesNum = "05";
            break;
            case "Junio": $mesNum = "06";
            break;
            case "Julio": $mesNum = "07";
            break;
            case "Agosto": $mesNum = "08";;
            break;
            case "Septiembre": $mesNum = "09";;
            break;
            case "Octubre": $mesNum = "10";
            break;
            case "Noviembre": $mesNum = "11";
            break;
            case "Diciembre": $mesNum = "12";
            break;
        }
        $hoy = date("d");
        $esteMes = date("m");
        //dd($fechas);
        return view("calendarioIndex",[
            'data' => $data,
            'mes' => $mes,
            'mespanish' => $mespanish,
            'casos' => $fechas,
            'mesNum' =>$mesNum,
            'hoy'=>$hoy,
            'thismes'=>$esteMes
        ]);
        
    }
    public function index_month($month){
        $tabla = DB::table('mas_datos')->get();
        $cliente = DB::table('clientes')->get();
        $fechas = [];
        for ($i=0; $i < count($tabla); $i++) { 
            $stringSeparado = explode('-', $tabla[$i]->fecha_juicio);
            for ($k=0; $k < count($cliente) ; $k++) { 
                if($tabla[$i]->id_cliente == $cliente[$k]->id ){
                    $arr= ['año'=> $stringSeparado[0],'mes'=>$stringSeparado[1],'dia'=>$stringSeparado[2],'nombre'=>$cliente[$k]->nombre];
                    array_push($fechas,$arr);
                }
            }
        }
        
        $data = $this->calendar_month($month);
        $mes = $data['month'];
        // obtener mes en espanol
        $mespanish = $this->spanish_month($mes);
        $mes = $data['month'];
        switch($mespanish){
            case "Enero": $mesNum = "01";
            break;
            case "Febrero":$mesNum = "02";
            break;
            case "Marzo":$mesNum = "03";
            break;
            case "Abril": $mesNum = "04";
            break;
            case "Mayo": $mesNum = "05";
            break;
            case "Junio": $mesNum = "06";
            break;
            case "Julio": $mesNum = "07";
            break;
            case "Agosto": $mesNum = "08";;
            break;
            case "Septiembre": $mesNum = "09";;
            break;
            case "Octubre": $mesNum = "10";
            break;
            case "Noviembre": $mesNum = "11";
            break;
            case "Diciembre": $mesNum = "12";
            break;
        }
        $hoy = date("d");
        $esteMes = date("m");
        return view("calendarioIndex",[
            'data' => $data,
            'mes' => $mes,
            'mespanish' => $mespanish,
            'casos' => $fechas,
            'mesNum' =>$mesNum,
            'hoy'=>$hoy,
            'thismes'=>$esteMes
            ]);
    
    }
    public static function calendar_month($month){
        //$mes = date("Y-m");
        $mes = $month;
        //sacar el ultimo de dia del mes
        $daylast =  date("Y-m-d", strtotime("last day of ".$mes));
        //sacar el dia de dia del mes
        $fecha      =  date("Y-m-d", strtotime("first day of ".$mes));
        $daysmonth  =  date("d", strtotime($fecha));
        $montmonth  =  date("m", strtotime($fecha));
        $yearmonth  =  date("Y", strtotime($fecha));
        // sacar el lunes de la primera semana
        $nuevaFecha = mktime(0,0,0,$montmonth,$daysmonth,$yearmonth);
        $diaDeLaSemana = date("w", $nuevaFecha);
        $nuevaFecha = $nuevaFecha - ($diaDeLaSemana*24*3600); //Restar los segundos totales de los dias transcurridos de la semana
        $dateini = date ("Y-m-d",$nuevaFecha);
        //$dateini = date("Y-m-d",strtotime($dateini."+ 1 day"));
        // numero de primer semana del mes
        $semana1 = date("W",strtotime($fecha));
        // numero de ultima semana del mes
        $semana2 = date("W",strtotime($daylast));
        // semana todal del mes
        // en caso si es diciembre
        if (date("m", strtotime($mes))==12) {
            $semana = 5;
        }
        else {
            $semana = ($semana2-$semana1)+1;
        }
        // semana todal del mes
        $datafecha = $dateini;
        $calendario = array();
        $iweek = 0;
        while ($iweek < $semana):
            $iweek++;
            //echo "Semana $iweek <br>";
            //
            $weekdata = [];
            for ($iday=0; $iday < 7 ; $iday++){
              // code...
                $datafecha = date("Y-m-d",strtotime($datafecha."+ 1 day"));
                $datanew['mes'] = date("M", strtotime($datafecha));
                $datanew['dia'] = date("d", strtotime($datafecha));
                $datanew['fecha'] = $datafecha;
              //AGREGAR CONSULTAS EVENTO
              //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                array_push($weekdata,$datanew);
            }
            $dataweek['semana'] = $iweek;
            $dataweek['datos'] = $weekdata;
            //$datafecha['horario'] = $datahorario;
            array_push($calendario,$dataweek);
        endwhile;
        $nextmonth = date("Y-M",strtotime($mes."+ 1 month"));
        $lastmonth = date("Y-M",strtotime($mes."- 1 month"));
        $month = date("M",strtotime($mes));
        $yearmonth = date("Y",strtotime($mes));
        //$month = date("M",strtotime("2019-03"));
        $hoy = date("d");
        $esteMes = date("m");
        $data = array(
            'next' => $nextmonth,
            'month'=> $month,
            'year' => $yearmonth,
            'last' => $lastmonth,
            'calendar' => $calendario,
            'hoy'=>$hoy,
            'thismes'=>$esteMes
            );
            return $data;
        }
        public static function spanish_month($month)
        {
            $mes = $month;
            if ($month=="Jan") {
            $mes = "Enero";
            }
            elseif ($month=="Feb")  {
            $mes = "Febrero";
            }
            elseif ($month=="Mar")  {
            $mes = "Marzo";
            }
            elseif ($month=="Apr") {
            $mes = "Abril";
            }
            elseif ($month=="May") {
            $mes = "Mayo";
            }
            elseif ($month=="Jun") {
            $mes = "Junio";
            }
            elseif ($month=="Jul") {
            $mes = "Julio";
            }
            elseif ($month=="Aug") {
            $mes = "Agosto";
            }
            elseif ($month=="Sep") {
            $mes = "Septiembre";
            }
            elseif ($month=="Oct") {
            $mes = "Octubre";
            }
            elseif ($month=="Oct") {
            $mes = "December";
            }
            elseif ($month=="Dec") {
            $mes = "Diciembre";
            }
            else {
            $mes = $month;
            }
            return $mes;
        }
}
