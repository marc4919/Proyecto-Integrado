<?php

class filtroCategoria extends Plan
{


    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function filtrarCategoria()
    {
        $categoria = $_POST['Categoria'];
        $sql = "SELECT * FROM planes where Categoria_Principal = '" . $categoria . "'";

        $result = $this->conn->query($sql);
        return $result;
    }

    public function showfiltrado()
    {
        $result = $this->filtrarCategoria();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class= 'cajaPlan'>";
                echo "<div class= 'card'>";
                echo "<p hidden class= 'idPlan'>" . $row["ID_PLAN"] . "</p>";
                echo "<img class='img' id='img-1' src='img/gallery-plans/" . $row["Categoria_Principal"] . ".png'>";
                echo "<div class='planname'><h1>" . $row["Nombre"] . "</h1></div>";
                echo "<div class='plandesdatos'>" . $row["Transporte"] . "</div>";
                echo "<div class='plandesdatos'>" . Staticos::formatoMoneda($row["Precio"]) . "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "no hay resultados";
        }
    }
}
