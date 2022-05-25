//para el apartado de news social
var btnSocial = document.getElementById("social");
var ruta = document.getElementById("news-cliente");
if(localStorage.getItem("socialUrl")){
    var url = localStorage.getItem("socialUrl");
    ruta.href = url;
    btnSocial.addEventListener("click",function(){
    var ventana = document.createElement("div");
    var cambio = document.createElement("input");
    var confirmar = document.createElement("button");
    var cerrar = document.createElement("button");
    var div = document.createElement("div");
    div.className = "seguridad";
    ventana.className = "ventana";
    cambio.placeholder = "Nueva Url...";
    cambio.value = "";
    confirmar.textContent= "Confirmar";
    confirmar.className = "btn btn-outline-success";
    cerrar.textContent = "Cerrar";
    cerrar.className = "btn btn-outline-danger";
    document.body.appendChild(div);
    div.appendChild(ventana);
    ventana.appendChild(cambio);
    ventana.appendChild(confirmar);
    ventana.appendChild(cerrar)
    confirmar.addEventListener("click",function(){
        if(ruta != ""){
            localStorage.setItem("socialUrl",cambio.value);
            location.reload();
        }
    })
    cerrar.addEventListener("click",function(){
        document.body.removeChild(div)
    })
});
}
else{
    localStorage.setItem("socialUrl","https://elderecho.com/");
}
//para el apartado news penal
var btnPenal = document.getElementById("penal");
var ruta2 = document.getElementById("news-penal");
if(localStorage.getItem("penalUrl")){
    var url = localStorage.getItem("penalUrl");
    ruta2.href = url;
    btnPenal.addEventListener("click",function(){
    var ventana = document.createElement("div");
    var cambio = document.createElement("input");
    var confirmar = document.createElement("button");
    var cerrar = document.createElement("button");
    var div = document.createElement("div");
    div.className = "seguridad";
    ventana.className = "ventana";
    cambio.placeholder = "Nueva Url...";
    cambio.value = "";
    confirmar.textContent= "Confirmar";
    confirmar.className = "btn btn-outline-success";
    cerrar.textContent = "Cerrar";
    cerrar.className = "btn btn-outline-danger";
    document.body.appendChild(div);
    div.appendChild(ventana);
    ventana.appendChild(cambio);
    ventana.appendChild(confirmar);
    ventana.appendChild(cerrar)
    confirmar.addEventListener("click",function(){
        if(ruta != ""){
            localStorage.setItem("penalUrl",cambio.value);
            location.reload();
        }
    })
    cerrar.addEventListener("click",function(){
        document.body.removeChild(div)
    })
});
}
else{
    localStorage.setItem("penalUrl","https://elderecho.com/");
}
//para el apartado laboral news
var btnLaboral = document.getElementById("laboral");
var ruta3 = document.getElementById("news-laboral");
if(localStorage.getItem("laboralUrl")){
    var url = localStorage.getItem("laboralUrl");
    ruta3.href = url;
    btnLaboral.addEventListener("click",function(){
    var ventana = document.createElement("div");
    var cambio = document.createElement("input");
    var confirmar = document.createElement("button");
    var cerrar = document.createElement("button");
    var div = document.createElement("div");
    div.className = "seguridad";
    ventana.className = "ventana";
    cambio.placeholder = "Nueva Url...";
    cambio.value = "";
    confirmar.textContent= "Confirmar";
    confirmar.className = "btn btn-outline-success";
    cerrar.textContent = "Cerrar";
    cerrar.className = "btn btn-outline-danger";
    document.body.appendChild(div);
    div.appendChild(ventana);
    ventana.appendChild(cambio);
    ventana.appendChild(confirmar);
    ventana.appendChild(cerrar)
    confirmar.addEventListener("click",function(){
        if(ruta != ""){
            localStorage.setItem("laboralUrl",cambio.value);
            location.reload();
        }
    })
    cerrar.addEventListener("click",function(){
        document.body.removeChild(div)
    })
});
}
else{
    localStorage.setItem("laboralUrl","https://elderecho.com/");
}
//para el apartado tribunal supremo
var btnSupremo = document.getElementById("supremo");
var ruta4 = document.getElementById("news-supremo");
if(localStorage.getItem("supremoUrl")){
    var url = localStorage.getItem("supremoUrl");
    ruta4.href = url;
    btnSupremo.addEventListener("click",function(){
    var ventana = document.createElement("div");
    var cambio = document.createElement("input");
    var confirmar = document.createElement("button");
    var cerrar = document.createElement("button");
    var div = document.createElement("div");
    div.className = "seguridad";
    ventana.className = "ventana";
    cambio.placeholder = "Nueva Url...";
    cambio.value = "";
    confirmar.textContent= "Confirmar";
    confirmar.className = "btn btn-outline-success";
    cerrar.textContent = "Cerrar";
    cerrar.className = "btn btn-outline-danger";
    document.body.appendChild(div);
    div.appendChild(ventana);
    ventana.appendChild(cambio);
    ventana.appendChild(confirmar);
    ventana.appendChild(cerrar)
    confirmar.addEventListener("click",function(){
        if(ruta != ""){
            localStorage.setItem("supremoUrl",cambio.value);
            location.reload();
        }
    })
    cerrar.addEventListener("click",function(){
        document.body.removeChild(div)
    })
});
}
else{
    localStorage.setItem("supremoUrl","https://elderecho.com/");
}