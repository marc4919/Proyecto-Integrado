<?php
session_start();
class Login extends User
{

    public function inicio()
    {
        $Nombre = $_POST['Nombre'];
        $Contrasena = $_POST['Password'];


        $login_validator = ("SELECT * from usuario where Nombre='$Nombre' and Password='$Contrasena'");
        echo $login_validator;
        $Consulta = $this->conn->query($login_validator);
        echo $this->conn->error;

        if (mysqli_num_rows($Consulta) > 0) {
            if ($Consulta->num_rows > 0) {
                while ($row = $Consulta->fetch_assoc()) { {

                        $_SESSION['Usuario'] = $row["ID_Usuario"];
                        $_SESSION['PlanesMostrados'] = [];
                        array_push($_SESSION['PlanesMostrados'], 0);
                        if ($_SESSION['Usuario'] != 1) {
                            header("location: ../public/selecciona.html");
                        } else {
                            header("location: ../public/dashboard.php");
                        }
                    }
                }
                //Si necuentra al usuario accde a la web 
                echo
                '<script>
                alert("Ha iniciado sesion");
                window.location= "../public/selecciona.php";
                 </script>
                ';
            }
        } else { //Si no lo encuantra vuelve a la pagina donde se inicia sesion 
            echo
            '<script>
                alert("SU USUARIO NO EXISTE, COMPRUEBE LOS DATOS INTRODUCIDOS"); 
                window.location= "register-log.php";
                </script>
                ';
            exit();
        }


        /*if ($Consulta->num_rows > 0) {
                while ($row = $Consulta->fetch_assoc()) { {
                        $_SESSION['Correo'] = $Correo;
                        $_SESSION['Usuario'] = $row["ID_Usuario"];
                        $_SESSION['PlanesMostrados'] = [];
                        array_push($_SESSION['PlanesMostrados'], 0);
                    }
                    //Variable de session para que se quede almacenada en la caché 
                    //Si necuentra al usuario accde a la web 
                    echo
                    '<script>
                            alert("Ha iniciado sesion");
                            window.location= "../public/selecciona.html";
                        </script>
                    '; 
                    }
                }
            } else {
                echo "no hay resultados"; */
    }
}
