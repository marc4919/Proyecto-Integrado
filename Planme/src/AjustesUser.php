<?php class AjustesUser extends User
{

    public function getUser()
    {
        $sql = "SELECT * FROM `usuario` where usuario.ID_Usuario = '" . $_SESSION['Usuario'] . "'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function showName()
    {
        $result = $this->getUser();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row["Nombre"];
            }
        } else {
            echo "no hay resultados";
        }
    }

    public function showCorreo()
    {
        $result = $this->getUser();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row["Correo"];
            }
        } else {
            echo "no hay resultados";
        }
    }

    public function showPassword()
    {
        $result = $this->getUser();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row["Password"];
            }
        } else {
            echo "no hay resultados";
        }
    }

    public function changeUser()
    {
        $Nombre = $_POST['Nombre'];
        $Correo = $_POST['Correo'];
        $Password = $_POST['Password'];
        $_SESSION['NombreUsuario'] = $_POST['Nombre'];
        $sql = "UPDATE `usuario` SET `Nombre` = '" . $Nombre . "', `Correo` = '" . $Correo . "', `Password` = '" . $Password . "' WHERE `usuario`.`ID_Usuario` = " . $_SESSION['Usuario'];

        $this->conn->query($sql);
    }
}
