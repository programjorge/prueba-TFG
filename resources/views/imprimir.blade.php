<html>
    <style>
        .tarjeta{
            margin-top:10px;
            width:600px;
            height:280px;
            padding-top:50px;
            background-image: url("img.jpg");
            background-size: cover;
        }
        .logo{
            width:60px;
            height:60px;
            margin-left:45px;
            background-size: cover;
            border-radius:50%;
            background-image: url("logo.jpg");
        }
        .datos{
            margin-top:20px;
        }
        p{
            font-weight: bold;
            margin-left:50px
        }
        .telefonos{
            margin-top:30px;
        }
        span{
            font-weight: normal;
        }
        .colegio-abogado{
            border-radius:8px;
            padding:5px 5px 5px 5px;
            background-color:#8b6f39;
            color:white;
            margin-left:30px;
        }
        h4{
            position: absolute;
            margin-top:-40px;
            margin-left:120px;
            color:#8b6f39;
        }
    </style>
<body>
    <div class = "tarjeta">
        <div class = "logo"></div>
        <h4>Abogados Villalba</h4>
        <div class = "datos">
            <p>Abogado: <span>{{$nombre}}</span></p>
            <p>Espc: @switch($espec)
                @case(1)
                    <span>Penalista</span>
                @break
                @case(2)
                    <span>Civil</span>
                @break
                @case(3)
                    <span>Laboralista</span>
                @break
                @case(4)
                    <span>Administrativo</span> 
                @break
                @case(5)
                    <span>Mercantilista</span>
                @break
                @default
                    
            @endswitch
            </p>
            <p>Email: <span>{{$email}}</span></p>
            <p><span>http://abogadosvillalba.com</span></p>
        </div>
        <div class = "telefonos">
        <p>T-Fijo: <span>{{$Toficina}}</span>&nbsp;&nbsp;T-Movil: <span>{{$Tmovil}}</span> <span class = "colegio-abogado">{{$colegio}}</span></p>
        </div>
    </div>
    <div class = "tarjeta">
        <div class = "logo"></div>
        <h4>Abogados Villalba</h4>
        <div class = "datos">
            <p>Abogado: <span>{{$nombre}}</span></p>
            <p>Espc: <span>{{$espec}}</span></p>
            <p>Email: <span>{{$email}}</span></p>
            <p><span>http://abogadosvillalba.com</span></p>
        </div>
        <div class = "telefonos">
        <p>T-Fijo: <span>{{$Toficina}}</span>&nbsp;&nbsp;T-Movil: <span>{{$Tmovil}}</span> <span class = "colegio-abogado">{{$colegio}}</span></p>
        </div>
    </div>
    <div class = "tarjeta">
        <div class = "logo"></div>
        <h4>Abogados Villalba</h4>
        <div class = "datos">
            <p>Abogado: <span>{{$nombre}}</span></p>
            <p>Espc: <span>{{$espec}}</span></p>
            <p>Email: <span>{{$email}}</span></p>
            <p><span>http://abogadosvillalba.com</span></p>
        </div>
        <div class = "telefonos">
        <p>T-Fijo: <span>{{$Toficina}}</span>&nbsp;&nbsp;T-Movil: <span>{{$Tmovil}}</span> <span class = "colegio-abogado">{{$colegio}}</span></p>
        </div>
    </div>
</body>
</html>