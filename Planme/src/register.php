<?php

class register extends User
{

    public function Registro()
    {

        $ID_Usuario = $_POST['ID_Usuario'];
        $Nombre = $_POST['Nombre'];
        $correo = $_POST['Correo'];
        $contrasena = $_POST['Password'];
        $tipo = $_POST['Tipo'];
        // $contrasena = hash('sha512', $contrasena); //Encrptacion de la contraseña

        //Creamos una query para almacenar los datos en la base de datos 
        $sql = $this->conn->prepare("INSERT INTO usuario (ID_Usuario, Nombre, Correo, Password,Tipo) VALUES (?,?,?,?)");
        $sql->bind_param("isss", $ID_Usuario, $Nombre, $correo, $contrasena, $tipo);
        $sql->execute();
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
                window.location=  "../index.phpp";
            </script>
            ';
            exit(); //Imprime el mensaje y acaba el script actual
            //Cuando el codigo llegue a exit el codigo de abajo no se ejecutará
        }
    }
}
