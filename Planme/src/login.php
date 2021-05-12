<?php
session_start();
include 'Conexion.php';
class login extends User
{

    public function Login($Correo, $Contrasena)
    {
        $Correo = $_POST['Correo'];
        $Contrasena = $_POST['Password'];


        $login_validator = mysqli_query("SELECT * from usuario where Correo$Correo and Password=$Contrasena");

        if (mysqli_num_rows($login_validator) > 0) {

            $_SESSION['Correo'] = $Correo; //Varialbe de session para que se quede almacenada en la caché 
            header("location: /Miproyecto/trabajoleng/menu1/index.php"); //Si necuentra al usuario accde a la web 
            echo
            '<script>
                    alert("Ha iniciado sesion");
                    window.location= "/Miproyecto/trabajoleng/menu1/index.php";
                </script>
            ';
        } else { //Si no lo encuantra vuelve a la pagina donde se inicia sesion 
            echo
            '<script>
                    alert("SU USUARIO NO EXISTE, COMPRUEBE LOS DATOS INTRODUCIDOS"); 
                    window.location= "../proyecto.php";
                </script>
            ';
            exit();
        }
    }
}
