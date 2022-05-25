<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abogados Villalba</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/cliente.css') }}">
</head>

<div class = "menu">
    <nav class="navbar navbar-expand-lg navbar-light menu fixed-top">
    <div class="container">
        <div class = "huevo"><a class="navbar-brand" href=""> <img class = "logo" src="{{URL::asset('img/logo4.png')}}" alt="">  </a></div>     
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                <a class="nav-link submenu" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link submenu" href="#nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link submenu" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link submenu" href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
</div>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<footer class = "footer-client">
    <div class = " div-footer somos">
        <h4>¿Quienes somos?</h4>
        <p>Abogados Villalba</p>
        <p>Buffete de abogados especializados en varias escuelas de abogacia listos para afrontar casos de varios tipos de delitos</p>
        <p>Con juristiccion para poder ejercer en disintos paises. </p>
        
    </div>
    <div class = "div-footer ofrecemos-footer">
        <a href="#nosotros" class = "ofrecemos">
            <h4>Servicios de:</h4>
            <ul>
                <li>Malversacion</li>
                <li>Divorcio</li>
                <li>Fraude</li>
                <li>Robo</li>
                <li>Asesinato</li>
            </ul>
            <i>Si no le podemos ayudar directamente, podemos buscarle otros que puedan de confianza</i>
        </a>
    </div>
    <div class = "div-footer">
        <a href="#contacto" class ="cont"><h4>Contactanos</h4></a>
        <p>C/ Condesa de la Vega del Pozo, 1</p>
        <P>CP: 19001</P>
        <p>Guadalajara, Catilla la-Mancha</p>
        <p>Movil: 608 019 557</p>
        <p>Fijo: 949 88 12 29</p>
    </div>
</footer>
</body>
</html>
