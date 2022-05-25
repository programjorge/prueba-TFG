@extends('layouts/header')
@section('content')
<style>
    .calendario-pad{
    padding-top:0 !important;
}
</style>
<div class="container">
        <p class="lead">
        <div class = "header-calendar0">
            <div><h3>Calendario</h3>
            <p>juicios de este mes</p></div>
            <div class = "info-ca"><span class = "casoHecho">Casos Realizados</span>  
            <span class = "casoPendiente">Casos Pendientes</span> </div>
        </div>
        


        <div class="row header-calendar"  >

        <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
            <a  href="{{ asset('home/calendario') }}/<?= $data['last']; ?>" style="margin:10px;">
            <i class="bi bi-arrow-left-square-fill"></i>
            </a>
            <h2 style="font-weight:bold;margin:10px;background-color:rgba(255, 255, 255, 0.555);border-radius:8px; padding:10px"><?= $mespanish; ?> <small><?= $data['year']; ?></small></h2>
            <a  href="{{ asset('home/calendario') }}/<?= $data['next']; ?>" style="margin:10px;">
            <i class="bi bi-arrow-right-square-fill"></i>
            </a>
        </div>

    </div>
    <div class="row">
        <div class="col header-col">Lunes</div>
        <div class="col header-col">Martes</div>
        <div class="col header-col">Miercoles</div>
        <div class="col header-col">Jueves</div>
        <div class="col header-col">Viernes</div>
        <div class="col header-col">Sabado</div>
        <div class="col header-col">Domingo</div>
    </div>
    <!-- inicio de semana -->

    @foreach ($data['calendar'] as $weekdata)
        <div class="row">
            <!-- ciclo de dia por semana -->
            @foreach  ($weekdata['datos'] as $dayweek)
                @if  ($dayweek['mes']==$mes)
                    <div class="col box-day">
                        {{ $dayweek['dia']  }}
                        @foreach ($casos as $datos)
                            @if ($datos['mes'] == $mesNum)
                                @if ($datos['dia'] == $dayweek['dia'])
                                    @if (intval($thismes) > intval($mesNum))
                                        <form action="{{route('admin')}}" method="get"><input type="hidden" name = "nombre" value = "{{$datos['nombre']}}"><button class = "casoHecho">caso de: {{$datos['nombre']}}</button></form>
                                    @elseif (intval($hoy)>=intval($dayweek['dia']) && intval($thismes) >= intval($mesNum))
                                        <form action="{{route('admin')}}" method="get"><input type="hidden" name = "nombre" value = "{{$datos['nombre']}}"><button class = "casoHecho">caso de: {{$datos['nombre']}}</button></form>
                                    @else
                                        <form action="{{route('admin')}}" method="get" ><input type="hidden" name = "nombre" value = "{{$datos['nombre']}}"><button class = "casoPendiente">caso de: {{$datos['nombre']}}</button></form>
                                    @endif
                                @endif
                            @endif
                        @endforeach
                    </div>
                @else
                <div class="col box-dayoff"></div>
                @endif
        @endforeach
        </div>
    @endforeach

    </div>
@endsection