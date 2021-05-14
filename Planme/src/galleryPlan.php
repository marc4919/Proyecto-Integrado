<?php

class galleryPlan extends Plan
{
    
    // AÑADIR AJAX PARA EVITAR RECARGA DE PÁGINA
    public function getPlans()
    {
        $number = rand(1, 24);
        $sql = "SELECT * FROM planes where ID_PLAN = " . $number;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function showPlans()
    {
        for ($i = 0; $i <= 2; $i++) {
            $result = $this->getPlans();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div>";
                    echo "<p>" . $row["Nombre"] . "</p>";
                    //echo "<p>" . $row["Descripcion"] . "</p>";
                    echo "<p>" . $row["Localizacion"] . "</p>";
                    echo "<p>" . $row["Transporte"] . "</p>";
                    //echo "<p>" . $row["Categoria_Principal"] . "</p>";
                    //echo "<p>" . $row["Categoria_Secundaria"] . "</p>";
                    echo "<p>" . Staticos::formatoMoneda($row["Precio"]) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "no hay resultados";
            }
        }
    }

    public function updatePlans()
    {
    }

    public function savePlans()
    {
    }
}
