<?php

class galleryPlan extends Plan
{

    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function getPlans()
    {
        $planesMostrados = implode(",", $_SESSION['PlanesMostrados']);
        $sql = "SELECT * FROM planes where ID_PLAN NOT IN ( " . $planesMostrados . " ) ORDER BY RAND() LIMIT 0,3";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function showPlans()
    {
        // AÑADIR UN REINICIO DE ARRAY CUANDO ESTÁN TODOS GUARDADOS --
        echo "<button id='Borrado'>Refresh</button>";
        $result = $this->getPlans();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class= 'cajaPlan'>";
                echo "<div class= 'card'>";
                echo "<p hidden class= 'idPlan'>" . $row["ID_PLAN"] . "</p>";
                echo "<img class='img' id='img-1' src='img/gallery-plans/circulo.png'>";
                echo "<div class='planname'><h1>" . $row["Nombre"] . "</h1></div>";
                echo "<div class='plandesdatos'>" . $row["Transporte"] . "</div>";
                echo "<div class='plandesdatos'>" . Staticos::formatoMoneda($row["Precio"]) . "</div>";
                //echo "<div class='plandescription'>" . $row["Descripcion"] . "</div>";
                echo "</div>";
                echo "</div>";
                array_push($_SESSION['PlanesMostrados'], $row['ID_PLAN']);
            }
        } else {
            $_SESSION['PlanesMostrados'] = [];
            array_push($_SESSION['PlanesMostrados'], 0);
            $this->showPlans();
        }
        // HABRÍA QUE HACER OTRO MÉTODO PARA ESTO RETURNEANDO EL ARRAY $planesAparecidos --- MGT
        /* for ($i = 0; $i <= 5; $i++) {
            $result = $this->getPlans();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (in_array($row["Nombre"], $planesAparecidos)) {
                        $i--;
                    } else {

                        echo "<div>";
                        echo "<p>" . $row["Nombre"] . "</p>";
                        //echo "<p>" . $row["Descripcion"] . "</p>";
                        echo "<p>" . $row["Localizacion"] . "</p>";
                        echo "<p>" . $row["Transporte"] . "</p>";
                        //echo "<p>" . $row["Categoria_Principal"] . "</p>";
                        //echo "<p>" . $row["Categoria_Secundaria"] . "</p>";
                        echo "<p>" . $this->formatoMoneda($row["Precio"]) . "</p>";
                        echo "</div>";
                        array_push($planesAparecidos, $row["Nombre"]);
                    }
                }
            } else {
                echo "no hay resultados";
            }
        } */
    }


    public function savePlans($id)
    {
        session_start();
        $sql = "INSERT INTO relacion (ID_Usuario, ID_PLAN, Horario) VALUES ('" . $_SESSION['Usuario'] . "' ,'" . $id . "','" . Staticos::Date() . "')";
        echo "</br>";
        echo $sql;
        $this->conn->query($sql);
    }

    /**
     * Get the value of planesAparecidos
     */
    public function getPlanesAparecidos()
    {
        echo $this->planesAparecidos;
    }

    /**
     * Set the value of planesAparecidos
     *
     * @return  self
     */
    public function putInArray($plan)
    {
        array_push($this->planesAparecidos, $plan);
        return $this;
    }
}
