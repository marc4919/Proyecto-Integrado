<?php
session_start();
include 'Conexion.php';

$correo=$_POST['correo'];
$contrasena = $_POST['contrasena'];


$login_validator = mysqli_query($conexion, "SELECT * from usuarios where email='$correo' and contrasena='$contrasena'");

if (mysqli_num_rows ($login_validator) > 0 ){

    $_SESSION['usuario']= $correo; //Varialbe de session para que se quede almacenada en la caché 
    header("location: /Miproyecto/trabajoleng/menu1/index.php"); //Si necuentra al usuario accde a la web 
    echo
    '<script>
        alert("Ha iniciado sesion");
        window.location= "/Miproyecto/trabajoleng/menu1/index.php";
    </script>
';
}else{ //Si no lo encuantra vuelve a la pagina donde se inicia sesion 
    echo 
    '<script>
        alert("SU USUARIO NO EXISTE, COMPRUEBE LOS DATOS INTRODUCIDOS"); 
        window.location= "../proyecto.php";
    </script>
    '; 
    exit();
}
?>