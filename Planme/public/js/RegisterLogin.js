document.getElementById("btn__iniciar-sesion").addEventListener("click", Sesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize",pagina); //Esta llamada hace que se ejectue la ffuncion pagina de maenra que nosotros cambiamos el tamaño de la pagina o al hacer resize que es lo mismo
//Declarar variables 
let contenedor_login_register=document.querySelector(".contenedor_login-register");
let formulario_login=document.querySelector(".formulario__login");
let formulario__register=document.querySelector(".formulario__register");
let caja_trasera_login=document.querySelector(".caja__trasera-login");
let caja_trasera_register=document.querySelector(".caja__trasera-register");
