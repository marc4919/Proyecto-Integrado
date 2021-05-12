<?php
class login extends User
{

    public function Login($Correo, $Contrasena)
    {
        $Correo = $_POST['Correo'];
        $Contrasena = $_POST['Password'];


        $login_validator = ("SELECT * from usuario where Correo='$Correo' and Password='$Contrasena'");
        $Consulta = $this->conn->query($login_validator);
        return $Consulta;

        if (mysqli_num_rows($Consulta) > 0) {

            $_SESSION['Correo'] = $Correo; //Variable de session para que se quede almacenada en la caché 
            header("location: "); //Si necuentra al usuario accde a la web 
            echo
            '<script>
                    alert("Ha iniciado sesion");
                    window.location= "";
                </script>
            ';
        } else { //Si no lo encuantra vuelve a la pagina donde se inicia sesion 
            echo
            '<script>
                    alert("SU USUARIO NO EXISTE, COMPRUEBE LOS DATOS INTRODUCIDOS"); 
                    window.location= "../index.php";
                </script>
            ';
            exit();
        }
    }
}
