<?php

class Crear extends Plan
{
    public function insertarNuevoPlan()
    {
        session_start();
        $ID_Creador = $_SESSION['Usuario'];
        $Nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        $localizacion = $_POST['Localizacion'];
        $transporte = $_POST['Transporte'];
        $categoria1 = $_POST['Categoria1'];
        $categoria2 = $_POST['Categoria2'];
        $precio = $_POST['Precio'];

        $sql = "INSERT INTO `planes`( `ID_Creador`, `Nombre`, `Descripcion`, `Localizacion`, `Transporte`, `Categoria_Principal`, `Categoria_Secundaria`, `Precio`) VALUES ('" . $ID_Creador . "' ,'" . $Nombre . "','" . $descripcion . "' ,'" . $localizacion . "' ,'" . $transporte . "' ,'" . $categoria1 . "' ,'" . $categoria2  . "' ,'" . $precio . "')";
        echo "</br>";
        echo $sql;
        $this->conn->query($sql);
    }
}
