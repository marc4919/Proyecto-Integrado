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

        $sql = "INSERT INTO usuario (Nombre, Correo, Password) VALUES ('" . $Nombre . "' ,'" . $correo . "','" . $contrasena . "')";
        echo '
            <script>
                alert("Se ha registrado correctamente");
                window.location=  "../public/register-log.html";
            </script>
            ';
        echo "</br>";
        echo $sql;
        $this->conn->query($sql);

        $verificacion = "SELECT * FROM usuario where Correo='$correo' or Nombre='$Nombre'";
        echo $verificacion;
        $Consulta = $this->conn->query($verificacion);
        echo $this->conn->error;

        if (mysqli_num_rows($Consulta) > 0) {
            echo '
        <script>
            alert("Uno de los campos ya ha sido registrado (email o usuario)");
            window.location=  "../proyecto.php";
        </script>
        ';
        exit();
        }
    }
}
