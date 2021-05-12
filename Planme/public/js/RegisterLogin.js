document.getElementById("btn__iniciar-sesion").addEventListener("click", Sesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize",pagina); //Esta llamada hace que se ejectue la ffuncion pagina de maenra que nosotros cambiamos el tamaño de la pagina o al hacer resize que es lo mismo
//Declarar variables 
let contenedor_login_register=document.querySelector(".contenedor_login-register");
let formulario_login=document.querySelector(".formulario__login");
let formulario__register=document.querySelector(".formulario__register");
let caja_trasera_login=document.querySelector(".caja__trasera-login");
let caja_trasera_register=document.querySelector(".caja__trasera-register");

function pagina(){
    if (window.innerWidth > 850){
        caja_trasera_login.style.display="block";
        caja_trasera_register.style.display="block";
    }else{
        caja_trasera_register.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.display="none";
        formulario_login.style.display="block";
        formulario__register.style.display="none";
        contenedor_login_register.style.left="0px";
    }
}

pagina();//Cargamos la funcion pagina font-family: 'Oswald', sans-serif;para que nos cargue bien la letra 


function Sesion(){
    if (window.innerWidth > 850){ //Si el ancho de windows es mayor a 850 ejecutame esta parte
        formulario__register.style.display = "none";
        contenedor_login_register.style.left= "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else {
        formulario__register.style.display = "none";
        contenedor_login_register.style.left= "0px"; //Si no el margin left va a ser 0 Esta parte es para el responsive
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}


function register(){
    if (window.innerWidth > 850){ 
        formulario__register.style.display = "block";
        contenedor_login_register.style.left= "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else {
        formulario__register.style.display = "block";
        contenedor_login_register.style.left= "0px"; //Si no el margin left va a ser 0 Esta parte es para el responsive
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1"; //Lo ponemos asi para cuando este en block se pueda ver
    }  
}
