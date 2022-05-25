@extends('layouts/header')
@section('content')
<h4>Expediente del empleado : {{$empleado[0]->nombre}}</h4>
    <form action="{{route('updateabog')}}" method="post" class = "custom-form">
        @csrf
        <input type="hidden" name = "id" value = "{{$empleado[0]->id}}">
        <div class = "inputs">
            <label class = "form-label">Nombre: </label>
            <input type="text" value = "{{$empleado[0]->nombre}}" name = "nombre" class = "form-control">
        </div>
        <div class = "inputs">
            <label class = "form-label">Apellido: </label>
            <input type="text" value = "{{$empleado[0]->apellido}}" name = "apellido" class = "form-control">
        </div>
        <div class = "inputs">
            <label class = "form-label">Foto: </label>
            <input type="text" value = "" placeholder="Vinculo imagen..." name = "foto" class = "form-control">
        </div>
        <div class = "inputs">
            <label class = "form-label">Email: </label>
            <input type="text" value = "{{$empleado[0]->email}}" name = "email" class = "form-control">
        </div>
        <div class = "inputs">
            <label class = "form-label">Telefono: </label>
            <input type="text" value = "{{$empleado[0]->telefono}}" name = "telefono" class = "form-control">
        </div>
        <div class = "inputs">
            <label class = "form-label">Especializacion: </label>
            <input type="text" value = "{{$empleado[0]->especializacion}}" name = "especializacion" class = "form-control">
        </div>
        <div class = "inputs mt-3"><button class = "btn btn-outline-light">Confirmar</button></div>
        
    </form>
@endsection