@extends('layouts/header')
@section('content')
@if (session()->has('success')) 

    <div class ="sucess"><p>{{ session('success') }} </p><a href="{{route('empleado')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill equis" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
        </svg></a>
    </div>
@endif
<form action="{{route('addabog')}}" method="post" class = "search addabog">
    @csrf
    <button class = "btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
        </svg>
        <span class = "">Añadir</span>
    </button>
</form>
<div class = "registros row justify-content-center">
    @foreach ($empleados as $empleado)
        <div class = "empleado  mx-3 my-5 mx-lg-3 my-lg-3 mx-md-5 my-md-5 ">
                <div class = "text-aling-start mx-2 my-2 mx-lg-5 my-lg-5">
                    <p class = "caract">Nombre: <span>{{$empleado->nombre}}</span></p>
                    <p class = "caract">Apellido: <span>{{$empleado->apellido}}</span></p>
                    <p class = "caract">Telefono: <span>{{$empleado->telefono}}</span></p>
                    <p class = "caract">Email: <span>{{$empleado->email}}</span></p>
                    <p class = "caract">Especializacion: <span>{{$empleado->especializacion}}</span></p>
                </div>
                <img class = "foto mx-2 my-2 mx-lg-5 my-lg-5"src="{{$empleado->foto}}" alt="foto">
                <div class = "mx-2 my-2 mx-lg-5 my-lg-5">
                    <form action="{{route('editarabog',['id'=>$empleado->id])}}" method="post">
                        @csrf
                        <button class = "btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square editar" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </button>
                        </form>
                        <form action="{{route('deleteabog',['id'=>$empleado->id])}}" method="post">
                        @csrf
                        <button class = "btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash rojo" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </form>
                </div>

            
            
        </div>
    @endforeach
</div>

@endsection