<?php

class register extends User
{

    public function Registro()
    {

        $Nombre = $_POST['Nombre'];
        $correo = $_POST['Correo'];
        $contrasena = $_POST['Password'];

        // $contrasena = hash('sha512', $contrasena); //Encrptacion de la contraseña

        //Creamos una query para almacenar los datos en la base de datos 

        $sql = "INSERT INTO usuario (Nombre, Correo, Password) VALUES ('" . $Nombre . "' ,'" . $correo . "','" . $contrasena . "')";
        echo "</br>";
        echo $sql;
        $this->conn->query($sql);
    }

    public function verficacion($correo, $Nombre)
    {
        $verificacion_email = "SELECT * FROM usuario where Correo ='$correo' or  Nombre='$Nombre'";
        $Consulta = $this->conn->query($verificacion_email);
        return $Consulta;


        if (mysqli_num_rows($Consulta) > 0) {
            echo '
            <script>
                alert("Uno de los campos ya ha sido registrado (email o usuario)");
                window.location=  "../index.php";
            </script>
            ';
            exit(); //Imprime el mensaje y acaba el script actual
            //Cuando el codigo llegue a exit el codigo de abajo no se ejecutará
        }
    }
}
