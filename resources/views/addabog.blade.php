@extends('layouts/header')
@section('content')
<h4>Añadir abogado</h4>
<form action="{{route('insertabog')}}" method="post" class = "custom-form">
        @csrf
        <div class = "inputs">
            <input type="text" value = ""placeholder="Nombre" name = "nombre" class = "form-control"required>
        </div>
        <div class = "inputs">
            <input type="text" value = ""placeholder="Apellido" name = "apellido" class = "form-control"required>
        </div>
        <div class = "inputs">
            <input type="text" value = "" placeholder="Vinculo imagen foto..." name = "foto" class = "form-control"required>
        </div>
        <div class = "inputs">
            <input type="text" value = ""placeholder="Email" name = "email" class = "form-control"required>
        </div>
        <div class = "inputs">
            <input type="text" value = ""placeholder="Telefono" name = "telefono" class = "form-control"required>
        </div>
        <div class = "inputs">
            <input type="text" value = ""placeholder="Especializacion" name = "especializacion" class = "form-control"required>
        </div>
        <div class = "inputs mt-3"><button class = "btn btn-outline-light">Confirmar</button></div>
        
    </form>
@endsection