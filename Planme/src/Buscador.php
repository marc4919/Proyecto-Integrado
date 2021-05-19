<?php
class Buscador extends Plan
{
    public function getPlansByName()
    {
        session_start();
        $Nombre = $_POST['Nombre'];
        $sql = "SELECT * FROM planes where Nombre = " . "%" . $Nombre . "%";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getPlansByTransporte()
    {
        session_start();
        $transporte = $_POST['Transporte'];
        $sql = "SELECT * FROM planes where Transporte = " . $transporte;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getPlansByCategoria1()
    {
        session_start();
        $categoria1 = $_POST['Categoria1'];
        $sql = "SELECT * FROM planes where Categoria_Principal = " . $categoria1;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getPlansByCategoria2()
    {
        session_start();
        $categoria2 = $_POST['Categoria2'];
        $sql = "SELECT * FROM planes where Categoria_Secundaria = " . $categoria2;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getPlansByPrecioEqual()
    {
        session_start();
        $precio = $_POST['Precio'];
        $sql = "SELECT * FROM planes where Precio = " . $precio . "or Precio <" . $precio;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getPlansByCompleteFilter()
    {
        session_start();
        $Nombre = $_POST['Nombre'];
        $localizacion = $_POST['Localizacion']; //HACER UNO QUE TENGA EN CUENTA LA LOCALIZACIÓN - MGT
        $transporte = $_POST['Transporte'];
        $categoria1 = $_POST['Categoria1'];
        $categoria2 = $_POST['Categoria2'];
        $precio = $_POST['Precio'];
        $sql = "SELECT * FROM planes where Nombre = " . "%" . $Nombre . "% AND Transporte = " . $transporte . "AND Categoria_Principal = " . $categoria1 . "AND Categoria_Secundaria = " . $categoria2 . "AND Precio = " . $precio . "or Precio <" . $precio;
        $result = $this->conn->query($sql);
        return $result;
    }


    public function showPlansUniqueFilter($filtro)
    {
        // AÑADIR UN REINICIO DE ARRAY CUANDO ESTÁN TODOS GUARDADOS --
        $planesAparecidos = []; // LA MAGIA - MGT
        for ($i = 0; $i <= 2; $i++) {
            $result = $filtro;
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
                        echo "<p>" . Staticos::formatoMoneda($row["Precio"]) . "</p>";
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
    }

    public function showPlansCompleteFilter()
    {
        // AÑADIR UN REINICIO DE ARRAY CUANDO ESTÁN TODOS GUARDADOS --
        $planesAparecidos = []; // LA MAGIA - MGT
        for ($i = 0; $i <= 2; $i++) {
            $result = $this->getPlansByCompleteFilter();
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
                        echo "<p>" . Staticos::formatoMoneda($row["Precio"]) . "</p>";
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
    }
}
