const botones = document.querySelectorAll(".ojosi");
// Definir función y evitar definirla de manera anónima
const cuandoSeHaceClick = function (evento) {
    let id_buena = this.id.split("verMas");
    let ID = id_buena[1];
    let div = document.getElementById("extras"+ID);
    $(div).removeClass("extrasno");
    $(div).addClass("extrassi");
	// console.log($(div))
}
const botonC = document.querySelectorAll(".cerrar");
const cerrar = function (evento){
    let id_buena = this.id.split("verMenos");
    let ID = id_buena[1];
    let div = document.getElementById("extras"+ID);
    $(div).removeClass("extrassi");
    $(div).addClass("extrasno");
}
// botones es un arreglo así que lo recorremos
botones.forEach(boton => {
	//Agregar listener
	boton.addEventListener("click", cuandoSeHaceClick);
});
botonC.forEach(boton => {
	//Agregar listener
	boton.addEventListener("click", cerrar);
});
    // "http://www.w3.org/2000/svg"