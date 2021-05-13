<?php

class galleryPlan extends Plan
{

    public function getPlans()
    {
        $sql = "SELECT * FROM planes";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function formatoMoneda($valor)
    {
        return number_format($valor, 2, ",", ".") . "€";
    }

    public function showPlans()
    {
        $result = $this->getPlans();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<hr/>";
                echo "<p>" . $row["Nombre"] . "</p>";
                echo "<p>" . $row["Descripcion"] . "</p>";
                echo "<p>" . $row["Localizacion"] . "</p>";
                echo "<p>" . $row["Transporte"] . "</p>";
                echo "<p>" . $row["Categoria_Principal"] . "</p>";
                echo "<p>" . $row["Categoria_Secundaria"] . "</p>";
                echo "<p>" . $this->formatoMoneda($row["Precio"]) . "</p>";
                  
            }
        } else {
            echo "no hay resultados";
        }
    }

    public function updatePlans()
    {
    }

    public function savePlans()
    {
    }
}
