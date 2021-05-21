<?php

class filtroCompleto extends Plan
{


    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function filtrarCompleto()
    {
        $nombre = $_POST['Nombre'];
        $precio = $_POST['Precio'];
        $categoria = $_POST['Categoria'];
        $transporte = $_POST['Transporte'];
        $sql = "SELECT * FROM planes where  Nombre LIKE '%" . $nombre . "%' AND Precio <= " . $precio . " AND Categoria_Principal = '" . $categoria . "' AND Transporte = '" . $transporte . "'";

        $result = $this->conn->query($sql);
        return $result;
    }

    public function showfiltrado()
    {
        // AÑADIR UN REINICIO DE ARRAY CUANDO ESTÁN TODOS GUARDADOS --
        $result = $this->filtrarCompleto();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class= 'cajaPlan'>";
                echo "<div class= 'card'>";
                echo "<img class='img' id='img-1' src='img/gallery-plans/circulo.png'>";
                echo "<div class='planname'><h1>" . $row["Nombre"] . "</h1></div>";
                echo "<div class='plandesdatos'>" . $row["Transporte"] . "</div>";
                echo "<div class='plandesdatos'>" . Staticos::formatoMoneda($row["Precio"]) . "</div>";
                //echo "<div class='plandescription'>" . $row["Descripcion"] . "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "no hay resultados";
        }
    }
}
