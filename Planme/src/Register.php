<?php

class Register extends User
{
    // MEJORA POSIBLE - QUE NO SE PUEDAN REGISTRAR 2 USUARIOS IGUALES - MGT
    public function Registro()
    {

        $Nombre = $_POST['Nombre'];
        $correo = $_POST['Correo'];
        $contrasena = $_POST['Password'];

        // $contrasena = hash('sha512', $contrasena); //Encrptacion de la contraseña

        //Creamos una query para almacenar los datos en la base de datos 

        $verificacion = "SELECT * FROM usuario where Correo='$correo' or Nombre='$Nombre'";
        echo $verificacion;
        $Consulta = $this->conn->query($verificacion);
        echo $this->conn->error;

        if (mysqli_num_rows($Consulta) > 0) {
            echo '
        <script>
            alert("Uno de los campos ya ha sido registrado (email o usuario)");
            window.location=  "register-log.php";
        </script>
        ';
            exit();
        } else {
            $sql = "INSERT INTO usuario (Nombre, Correo, Password) VALUES ('" . $Nombre . "' ,'" . $correo . "','" . $contrasena . "')";
            echo '
            <script>
                alert("Se ha registrado correctamente");
                window.location= "register-log.php";
            </script>
            ';
            echo "</br>";
            echo $sql;
            $this->conn->query($sql);

            $verificacion = "SELECT * FROM usuario where Correo='$correo' or Nombre='$Nombre'";
            $Consulta = $this->conn->query($verificacion);
            while ($row = $Consulta->fetch_assoc()) { {
                    session_start();
                    $_SESSION['Usuario'] = $row["ID_Usuario"];
                    $_SESSION['NombreUsuario'] = $row["Nombre"];
                    $_SESSION['PlanesMostrados'] = [];
                    array_push($_SESSION['PlanesMostrados'], 0);
                }
            }
            header("location: selecciona.php");
        }
    }
}
