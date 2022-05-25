@extends('layouts/header')
@section('content')
<h4>Expediente del cliente : {{$clientes[0]->nombre}}.</h4>
    <form action="{{route('insert')}}" method="post" class = "custom-form">
        @csrf
        <input type="hidden" name = "id" value = "{{$clientes[0]->id}}" required>
        <div class = "inputs">
            <label class = "form-label">Lugar de los hechos: </label>
            <input type="text" value = "" name = "lugar_hechos" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Lugar del juicio: </label>
            <input type="text" value = "" name = "lugar" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Juristiccion: </label>
            <select name="juristiccion" class="form-select">
                    <option value="1">ESPAÑA</option>
                    <option value="2">Latino America</option>
                    <option value="3">FRANCIA</option>
                    <option value = "4">PORTUGAL</option>
            </select>
        </div>
        <div class = "inputs">
            <label class = "form-label">Provincia: </label>
            <input type="text" value = "" name = "provincia" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Comunidad autonoma: </label>
            <input type="text" value = "" name = "comunidad" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Hora del juicio: </label>
            <input type="text" value = "" name = "hora" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Caso: </label>
            <select name="caso" class="form-select">
                    <option value="1">Malversacion</option>
                    <option value="2">divorcio</option>
                    <option value="3">Fraude</option>
                    <option value = "4">Robo</option>
                    <option value = "5">asesinato</option>
            </select>
        </div>
        <div class = "inputs">
            <label class = "form-label">Abogado: </label>
            <select name="abogado" class="form-select">
                    @foreach ($abogados as $abogacito)
                        <option value="{{$abogacito->id}}">{{$abogacito->nombre}}</option>
                    @endforeach
            </select>
        </div>
        <div class = "inputs">
            <label class = "form-label">Fecha del juicio: </label>
            <input type="date" value = "0-0-0" name = "fecha_juicio" class = "form-control"required>
        </div>
        <div class = "inputs mt-3"><button class = " btn btn-outline-light">Confirmar</button></div>
        
    </form>
@endsection