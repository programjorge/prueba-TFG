@extends('layouts/header')
@section('content')
<h4>Expediente del cliente : {{$user[0]->nombre}}</h4>
    <form action="{{route('update')}}" method="post" class = "custom-form">
        @csrf
        <input type="hidden" name = "id" value = "{{$id}}"required>
        <div class = "inputs">
            <label class = "form-label">Lugar de los hechos: </label>
            <input type="text" value = "{{$data[0]->lugar_hechos}}" name = "lugar_hechos" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Lugar del juicio: </label>
            <input type="text" value = "{{$data[0]->lugar_juicio}}" name = "lugar" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Juristiccion: </label>
            <select name="juristiccion" class="form-select">
            @switch($data[0]->juristiccion)
                    @case(1)
                    <option value="1">ESPAÑA</option>
                    <option value="2">Latino America</option>
                    <option value="3">FRANCIA</option>
                    <option value = "4">PORTUGAL</option>
                    @break
                    @case(2)
                    <option value="2">Latino America</option>
                    <option value="1">ESPAÑA</option>
                    <option value="3">FRANCIA</option>
                    <option value = "4">PORTUGAL</option>
                    @break
                    @case(3)
                    <option value="3">FRANCIA</option>
                    <option value="1">ESPAÑA</option>
                    <option value="2">Latino America</option>
                    <option value = "4">PORTUGAL</option>
                    @break
                    @case(4)
                    <option value="4">PORTUGAL</option>
                    <option value="1">ESPAÑA</option>
                    <option value="2">Latino America</option>
                    <option value="3">FRANCIA</option>
                    @break
                    @default
                    <option value="1">ESPAÑA</option>
                    @break
            @endswitch
            </select>
        </div>
        <div class = "inputs">
            <label class = "form-label">Provincia: </label>
            <input type="text" value = "{{$data[0]->provincia}}" name = "provincia" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Comunidad autonoma: </label>
            <input type="text" value = "{{$data[0]->comunidad}}" name = "comunidad" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Hora del juicio: </label>
            <input type="text" value = "{{$data[0]->hora_juicio}}" name = "hora" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Caso: </label>
            <select name="caso" class="form-select">
            @switch($data[0]->juristiccion)
                    @case(1)
                    <option value="1">Malversacion</option>
                    <option value="2">divorcio</option>
                    <option value="3">Fraude</option>
                    <option value = "4">Robo</option>
                    <option value = "5">asesinato</option>
                    @break
                    @case(2)
                    <option value="2">divorcio</option>
                    <option value="1">Malversacion</option>
                    <option value="3">Fraude</option>
                    <option value = "4">Robo</option>
                    <option value = "5">asesinato</option>
                    @break
                    @case(3)
                    <option value="3">Fraude</option>
                    <option value="2">divorcio</option>
                    <option value="1">Malversacion</option>
                    <option value = "4">Robo</option>
                    <option value = "5">asesinato</option>
                    @break
                    @case(4)
                    <option value = "4">Robo</option>
                    <option value="1">Malversacion</option>
                    <option value="2">divorcio</option>
                    <option value="3">Fraude</option>
                    <option value = "5">asesinato</option>
                    @break
                    @case(4)
                    <option value = "5">asesinato</option>
                    <option value="1">Malversacion</option>
                    <option value="2">divorcio</option>
                    <option value="3">Fraude</option>
                    <option value = "4">Robo</option>
                    @break
                    @default
                    <option value = "5">asesinato</option>
                    @break
            @endswitch
            </select>
        </div>
        <div class = "inputs">
            <label class = "form-label">Abogado: </label>
            <select name="abogado"class="form-select">
                <option value="{{$abogado_anterior[0]->id}}">{{$abogado_anterior[0]->nombre}}</option>
                @foreach ($abogado as $abogacito)
                    <option value="{{$abogacito->id}}">{{$abogacito->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class = "inputs">
            <label class = "form-label">Fecha del juicio: </label>
            <input type="date" value = "0-0-0" name = "fecha_juicio" class = "form-control"required>
        </div>
        <div class = "inputs mt-3"><button class = "btn btn-outline-light">Confirmar</button></div>
        
    </form>
@endsection