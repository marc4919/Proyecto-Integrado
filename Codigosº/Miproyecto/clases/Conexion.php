<?php

$conexion = mysqli_connect("localhost","root","","login_register");

if ($conexion){
    echo 'Conectado existosamente';
}else{
    echo"No se ha podido conectar a la Base de datos";
}

?>