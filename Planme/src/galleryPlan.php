<?php

class galleryPlan extends Plan
{

    public function getPlans()
    {
        $sql = "SELECT * FROM planes";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function showPlans()
    {
        $result = $this->getPlans();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<hr/>";
                echo "<p>" . $row["Nombre"] . "</p>";
                echo "<p>" . $row["Descripcion"] . "</p>";
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
