@extends('layouts/header')
@section('content')
    <h4>GTV</h4>
    <h5>Generador de Tarjetas de Visita</h5>
    <form action="{{route('imprimir')}}" method="post" class = "custom-form">
        @csrf
        <div class = "inputs">
            <label class = "form-label">Nombre: </label>
            <input type="text" value = "" name = "nombre" class = "form-control" required>
        </div>
        <div class = "inputs">
            <label class = "form-label">especializacion: </label>
            <select name="espec" class="form-select">
                    <option value="1">Penalista</option>
                    <option value="2">Civil</option>
                    <option value="3">Laboralista</option>
                    <option value = "4">Administrativo</option>
                    <option value = "5">Mercantilista</option>
            </select>
        </div>
        <div class = "inputs">
            <label class = "form-label">Telefono oficina: </label>
            <input type="text" value = "" name = "Toficina" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Telefono movil: </label>
            <input type="text" value = "" name = "Tmovil" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">email: </label>
            <input type="text" value = "" name = "email" class = "form-control"required>
        </div>
        <div class = "inputs">
            <label class = "form-label">Colegio de abogados: </label>
            <input type="text" value = "" name = "colegio" class = "form-control"required>
        </div>
        <div class = "inputs mt-3"><button class = " btn btn-outline-light">Generar</button></div>
        
    </form>
@endsection