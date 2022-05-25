@extends('layouts/header')
@section('content')
@if (session()->has('success')) 

    <div class ="sucess"><p>{{ session('success') }} </p><a href="{{route('admin')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill equis" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></div>
@endif
<form action="{{route('admin')}}" class = "search">
    <input type="text" name = "nombre" placeholder= "Buscar cliente.." value ="">
    <button class = "btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </button>
    <button class = "btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
    </svg>
    </button>
</form>
<div class = "tabla">
    <table>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th></th>
        </tr>
        
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->email}}</td>
                <td>
                    <svg id= "verMas{{$cliente->id}}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye ojosi" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>
                </td>
                <tr class = "fila1">
                    <td COLSPAN="4">
                        <div id = "extras{{$cliente->id}}"class = "extrasno extras">
                            <div class = "datos">
                                @if (count($cliente->casos)>=1)
                                    @foreach ($cliente->casos as $caso)
                                        Lugar de los hechos: {{$caso->lugar_hechos}} <br>
                                        Lugar del juicio: {{$caso->lugar_juicio}} <br>
                                        @switch($caso->juristiccion)
                                            @case(1)
                                                Juristiccion: ESPAÑA <br>
                                            @break
                                            @case(2)
                                                Juristiccion: Latino America <br>
                                            @break
                                            @case(3)
                                                Juristiccion: FRANCIA <br>
                                            @break
                                            @case(4)
                                                Juristiccion: PORTUGAL <br>
                                            @break
                                            @default
                                            <p class = "error">Inserte juristiccion</p>
                                        @endswitch
                                        Provincia: {{$caso->provincia}} <br>
                                        Comunidad: {{$caso->comunidad}} <br>
                                        Hora del juicio: {{$caso->hora_juicio}} <br>
                                        @switch($caso->caso)
                                            @case(1)
                                                Caso: Malversacion de fondos <br>
                                            @break
                                            @case(2)
                                                Caso: Divorcio <br>
                                            @break
                                            @case(3)
                                                Caso: Fraude <br>
                                            @break
                                            @case(4)
                                                Caso: Robo <br>
                                            @break
                                            @case(5)
                                                Caso: Asesinato <br>
                                            @break
                                            @default
                                            <p class = "error">Inserte caso</p>    
                                        @endswitch
                                        Abogado: {{$caso->nombre_abogado}} <br>
                                        dia juicio: {{$caso->fecha_juicio}}
                                        <div class = "linea-botones">
                                        <form action="{{route('editar',['id'=>$caso->id])}}" method="post">
                                            @csrf
                                            <button class = "btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square editar" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </button>
                                        </form>
                                        <form action="{{route('delete',['id'=>$caso->id])}}" method="post">
                                            @csrf
                                            <button class = "btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash rojo" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
                                        </form>
                                        </div>
                                    @endforeach
                                @else
                                    <div class = "sin-datos">
                                        Lugar de los hechos: <br>
                                        Lugar del juicio:<br>
                                        Juristiccion:<br>
                                        provincia:<br>
                                        Comunidad:<br>
                                        Hora del juicio:<br>
                                        caso:<br>
                                        Abogado:<br>
                                    </div>
                                @endif
                            </div>
                            <div class = "iconos">
                                <svg id = "verMenos{{$cliente->id}}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle cerrar" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                                <form action="{{route('add',['id'=>$cliente->id])}}" method="post">
                                        @csrf
                                        <button class = "btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus add" viewBox="0 0 16 16">
                                                <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                                            </svg>
                                        </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            </tr>    
        @endforeach
    </table>
    @if (count($clientes) <= 0)
        <h3 class = "text-light bg-dark error-bus text-center">No existe ningun cliente con ese nombre</h3>
    @endif
</div>
<script src="{{ URL::asset('js/ver.js') }}"></script>
@endsection


