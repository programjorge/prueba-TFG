@extends('layouts/header')
@section('content')
    @if (session()->has('success')) 
    <div class ="sucess"><p>{{ session('success') }} </p><a href="{{route('blog')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill equis" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
    </svg></a></div>
    @endif
    <h4>¿Necesitas ayuda?</h4>
    <form action="{{route('ask')}}" method="post" class = "custom-form pt-2">
        @csrf
        <input class = "input-blog" type="text" name = "titulo" placeholder = "Titulo de tu consulta.." required>
        <textarea class = "text-blog" name="pregunta" placeholder = "Exponga aqui.." required></textarea>
        <div class = "inputs mt-3"><button class = " btn btn-outline-light">Enviar</button></div>
    </form>
    <button id = "ver_mas">Ver Preguntas/Respuestas <i class="bi bi-caret-down-square-fill"></i></button>
    @foreach ($preguntas as $pregunta)
        <div class = "pregunta">
            <div class =" div">
                <b class = "titulo">{{$pregunta->titulo}}</b>
                <p class = "texto">{{$pregunta->texto}}</p>
            <?php $i = 1; ?>
            @foreach ($respuestas as $respuesta)
                @if ($pregunta->id == $respuesta->id_pregunta)
                    <b class = "titulo">Respuesta Nº: {{$i}}</b>
                    <p class = "texto">{{$respuesta->respuesta}}</p>
                    <?php $i++ ?>
                @endif
            @endforeach
            </div>
            
            <form action="{{route('res')}}" method = "post">
                @csrf
                <input type="hidden" name = "id_pregunta" value = "{{$pregunta->id}}">
                <textarea class = "text-blog-res" name="respuesta" placeholder = "Responda aqui.."></textarea>
                <div class = "btn-center">
                    <button class = " btn btn-success">Responder</button>
                </div>
            </form>
        </div>
    @endforeach
    <script>
        var button = document.getElementById("ver_mas");
        var clase =  document.getElementsByClassName("pregunta");
        button.addEventListener("click", function(){
            for (let i = 0; i < clase.length; i++) {
                if(clase[i].style.display == "block"){
                    button.innerHTML = "Ver Preguntas/Respuestas <i class='bi bi-caret-down-square-fill'></i>"
                    clase[i].style.display = "none";
                    
                }else{
                    button.innerHTML = "No Ver Preguntas/Respuestas <i class='bi bi-caret-up-square-fill'></i>"
                    clase[i].style.display = "block";
                }
                // clase[i].style.display = "block";
                
            }
        });
    </script>
@endsection