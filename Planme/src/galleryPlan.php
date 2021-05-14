<?php

class galleryPlan extends Plan
{

    // AÑADIR AJAX PARA EVITAR RECARGA DE PÁGINA - MGT
    public function getPlans()
    {
        $number = rand(1, 24);
        $sql = "SELECT * FROM planes where ID_PLAN = " . $number;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function formatoMoneda($valor)
    {
        return number_format($valor, 2, ",", ".") . "€";
    }

    public function showPlans()
    {
        // AÑADIR UN REINICIO DE ARRAY CUANDO ESTÁN TODOS GUARDADOS --
        $planesAparecidos = []; // LA MAGIA - MGT
        for ($i = 0; $i <= 2; $i++) {
            $result = $this->getPlans();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (in_array($row["Nombre"], $planesAparecidos)) {
                        $i--;
                    } else {

                        echo "<div class= 'cajaPlan'>";
                        echo "<p hidden class= 'idPlan'>" . $row["ID_PLAN"] . "</p>";
                        echo "<p>" . $row["Nombre"] . "</p>";
                        //echo "<p>" . $row["Descripcion"] . "</p>";
                        echo "<p>" . $row["Localizacion"] . "</p>";
                        echo "<p>" . $row["Transporte"] . "</p>";
                        //echo "<p>" . $row["Categoria_Principal"] . "</p>";
                        //echo "<p>" . $row["Categoria_Secundaria"] . "</p>";
                        echo "<p>" . $this->formatoMoneda($row["Precio"]) . "</p>";
                        echo "</p>";
                        echo "</div>";
                        array_push($planesAparecidos, $row["Nombre"]);
                    }
                }
            } else {
                echo "no hay resultados";
            }
        }
        echo "</br>";
        echo "<span id='Borrado'>Refresh</span>";
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

    public function updatePlans()
    {
        $planesAparecidos = []; // LA MAGIA - MGT
        for ($i = 0; $i <= 2; $i++) {
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
        }
    }

    public function savePlans($id)
    {
        /* $sql = "INSERT INTO relacion (ID_Usuario, ID_PLAN, Horario) VALUES ('" . $Nombre . "' ,'" . $correo . "','" . $contrasena . "')";
        echo "</br>";
        echo $sql;
        $this->conn->query($sql); */
    }
}
