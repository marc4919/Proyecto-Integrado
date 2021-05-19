<?php class AdminCreator extends Conexion
{
    public function insertarNuevoPlan()
    {
        session_start();
        $Nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        $localizacion = $_POST['Localizacion'];
        $transporte = $_POST['Transporte'];
        $categoria1 = $_POST['Categoria1'];
        $categoria2 = $_POST['Categoria2'];
        $precio = $_POST['Precio'];


        // $contrasena = hash('sha512', $contrasena); //Encrptacion de la contraseña

        //Creamos una query para almacenar los datos en la base de datos 
        $sql = "INSERT INTO `planes`( `ID_Creador`, `Nombre`, `Descripcion`, `Localizacion`, `Transporte`, `Categoria_Principal`, `Categoria_Secundaria`, `Precio`) VALUES ('" . "1" . "' ,'" . $Nombre . "','" . $descripcion . "' ,'" . $localizacion . "' ,'" . $transporte . "' ,'" . $categoria1 . "' ,'" . $categoria2  . "' ,'" . $precio . "')";
        echo "</br>";
        echo $sql;
        $this->conn->query($sql);

        header("location: ../public/dashboard.php");
    }

    public function insertaNuevoUsuario()
    {
        $Nombre = $_POST['Nombre'];
        $correo = $_POST['Correo'];
        $contrasena = $_POST['Password'];

        $sql = "INSERT INTO usuario (Nombre, Correo, Password) VALUES ('" . $Nombre . "' ,'" . $correo . "','" . $contrasena . "')";
        echo $sql;
        $this->conn->query($sql);
        header("location: ../public/dashboard.php");
    }
}
