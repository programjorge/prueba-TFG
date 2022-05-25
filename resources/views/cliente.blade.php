@extends('header&footer')
@section('content')
@if(session()->has('success')) 
    <div class ="sucess"><p>{{ session('success') }} </p><a href="{{route('cliente')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle-fill equis" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></div>

@endif
<video id = "inicio" style="margin-top:50px" src="{{URL::asset('img/spot.mp4')}}"mz-autoplay-scroll="" playsinline="" autoplay="" loop="" mz-always-muted="" muted="" width="100%"></video>
    </div>
    <div class="container-fluid" id = "nosotros">
        <div class = "row main ">
            <div class=" col-12 ">
                <div class = "row intro">
                    <div class = "col-3 imagen1"></div>
                    <div class = "col-6 texto">
                            <div class = "col-12 titulo "><b>Abogados Villalba</b></div>
                            <div class = "col-12 texto2">Contamos con Abogados especializados que podrán prestar servicios en las diferentes áreas del derecho tanto a personas físicas como jurídicas</div>
                            <div class = "col-12 boton">
                                
                                <a href="#contacto" class = ""><div class = "yew"></div>Contactanos</a>
                            </div>
                    </div>
                    <div class = "col-3 imagen2"></div>
                </div>
            </div>
        </div>
    </div>
     
    <div class = "row nosotros p-0 m-0">
        <h3 >¿Sobre nosotros?</h3>
            <div class="col-12 col-lg-4 bagon">

            </div>
            <div class="col-12 col-lg-4 d-flex flex-column ">
                <div class="p-5">
                <h5>Celeridad, eficacia y profesionalidad</h5>
                <p>en la realización de las gestiones necesarias en los Juzgados para la buena marcha del procedimiento, así como en la elaboración y presentación de escritos.</p>
                </div>
            </div>
            <div class="col-12 col-lg-4 bagon2 d-lg-block ">
                
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column ">
                <div class="p-5">
                <h5>Seguimiento de plazos</h5>
                <p>Llevamos el seguimiento de todos los plazos procesales, ofreciendo información puntual del vencimiento de los mismos antes de que se produzca, a fin de que el procedimiento se sustancie correctamente.</p>
                </div>
            </div>
            <div class="col-12  d-lg-block col-lg-4 bagon3 ">
               
            </div>
            <div class="col-12  d-lg-block col-lg-4 d-flex flex-column">
                <div class="p-5">
                <h5>Disponibilidad</h5>
                <p>para la representación en toda clase de procedimientos y partidos judiciales, así como para gestiones extrajudiciales, ofreciendo acompañamiento al cliente y al letrado en los casos en que sea necesario.</p>
                </div>
            </div>
        </div>
    </div>
    <div class = "" >
        <div class = "seccion-fondo">
            <div class = "precios">
                <h3 class = "tarifas">Nuestras tarifas</h3>
                <p class = "tarifas">los precios varian dependiendo del caso,minimos:</p>
                <div class = "precios-2">
                <table class = "secion-precios">
                    <tr>
                        <th class = "titulito">Penal</th>
                    </tr>
                    <tr><td class = "dinerito">80,00$ / consulta<hr></td> </tr>
                    <tr><td class = "dinerito">390,88$ / caso</td></tr>
                    <tr><td class = "footercito"></td></tr>
                </table>
                <table class = "secion-precios">
                    <tr>
                        <th class = "titulito">Civil</th>
                    </tr>
                    <tr><td class = "dinerito">20,00$ / consulta<hr></td> </tr>
                    <tr><td class = "dinerito">149,99$ / caso</td></tr>
                    <tr><td class = "footercito"></td></tr>
                </table>
                <table class = "secion-precios">
                    <tr>
                        <th class = "titulito">administrativo</th>
                    </tr>
                    <tr><td class = "dinerito">45,00$ / consulta<hr></td> </tr>
                    <tr><td class = "dinerito">280,00$ / caso</td></tr>
                    <tr><td class = "footercito"></td></tr>
                </table>
            </div>
            </div>
        </div>
    <h3 class = "nosotros" id = "servicios">Nuestros servicios</h3>
    <div class = "row p-0 m-0">
        <div class = "col-12 col-lg-4 d-flex flex-column align-items-center mt-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2 boxes mb-3" viewBox="0 0 16 16">
                <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
            </svg>
            <span class = "intro-serv mb-2">Notificación de resoluciones judiciales</span>
            <p class = "text-serv mb-5">Se realiza vía correo electrónico mediante la utilización de las últimas tecnologías informáticas, adaptadas a la gestión de expedientes judiciales.</p>
        </div>
        <div class = "col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center mt-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-inboxes-fill boxes mb-3" viewBox="0 0 16 16">
                <path d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z"/>
            </svg>
            <span class = "intro-serv mb-2">Gestión y seguimiento de expedientes</span>
            <p class = "text-serv mb-5">Revisión quincenal de todos los procedimientos, realizando las oportunas gestiones de impulso procesal, así como recordatorios de vencimientos y señalamientos.</p>
        </div>
        <div class = "col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center mt-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-paper-fill boxes mb-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.5 9.5 3 7.5v-6A1.5 1.5 0 0 1 4.5 0h7A1.5 1.5 0 0 1 13 1.5v6l-3.5 2L8 8.75l-1.5.75ZM1.059 3.635 2 3.133v3.753L0 5.713V5.4a2 2 0 0 1 1.059-1.765ZM16 5.713l-2 1.173V3.133l.941.502A2 2 0 0 1 16 5.4v.313Zm0 1.16-5.693 3.337L16 13.372v-6.5Zm-8 3.199 7.941 4.412A2 2 0 0 1 14 16H2a2 2 0 0 1-1.941-1.516L8 10.072Zm-8 3.3 5.693-3.162L0 6.873v6.5Z"/>
            </svg>
            <span class = "intro-serv mb-2">Recepción y entrega de documentación</span>
            <p class = "text-serv mb-5">Se realiza a través del correo y mensajería por cuenta del despacho, mediante la empresa elegida y siempre velando por la seguridad, integridad y rapidez en la entrega.</p>
        </div>
    </div>
    <div class = "row p-0 m-0 anim-del">
        <div class = "col-12 col-lg-4 div-delitos">
            <h4 class = "delitos">Delito Penal</h4 >
            <div class = "text-del">
            <b> Podemos definir el delito como una conducta, recogida en la legislación penal asociada a una sanción penal, que lesiona o pone en peligro un bien jurídico</b>
                <p>En cuanto a los elementos que lo configuran son:</p>
                <ul>
                    <li>Homicidio</li>
                    <li>Asesinatos</li>
                    <li>Lesiones</li>
                </ul>
            </div>
        </div>
        <div class = "col-12 col-lg-4 div-delitos">
            <h4 class = "delitos">Delito Civil</h4 >
            <div class = "text-del">
            <b> Desde el punto de vista del derecho civil el delito es el hecho ilícito realizado con la intención de cometer un daño</b>
                <p>En cuanto a los elementos que lo configuran son:</p>
                <ul>
                    <li>Transgresión a la ley</li>
                    <li>Daño a terceros</li>
                    <li>Relación de causalidad entre el hecho y el daño</li>
                    <li>Intención de causarlo</li>
                </ul>
            </div>
        </div>
        <div class = "col-12 col-lg-4 div-delitos">
            <h4 class = "delitos">Delito Administrativo</h4 >
            <div class = "text-del">
            <b>  La infracción administrativa representa una vulneración de las normas de derecho público, por lo que no incluye ni las normas de Derecho Privado, que podrían dar pie a responsabilidad civil, ni las de Derecho Penal</b>
                <p>En cuanto a los elementos que lo configuran son:</p>
                <ul>
                    <li>Robo</li>
                    <li>Malversacion</li>
                    <li>Corrupcion</li>
                </ul>
            </div>
        </div>
    </div>
    <h3 class = "nosotros" id= "contacto">Contactanos</h3>
    <div class = "row m-0 p-0 contactame">
        <div class="col-6 p-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12111.726834741012!2d-3.1643759!3d40.631388!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5ab16c0e3ee2df58!2sVillalba%20Abogados!5e0!3m2!1ses!2ses!4v1652884133179!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-6 p-5">
            <form action="{{route('añadir_contacto')}}" method="post">
                @csrf
                <div class = "iconitos">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle text-light ps-2" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    <input type="text" placeholder = "Nombre" name = "nombre" required class = "ms-3">
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-plus-fill text-light ps-2" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    <input type="text" placeholder = "Apellido" name = "apellido" required class = "ms-3">
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope text-light ps-2" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                    <input type="text" placeholder = "Email" name = "email" required class = "ms-3">
                </div>
                <textarea name="" id="" cols="80" rows="3" placeholder = "Mensaje" class = "mt-2 text-area"></textarea>
                <div>
                    <button class = "ms-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope-check " viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                </svg>
</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection
