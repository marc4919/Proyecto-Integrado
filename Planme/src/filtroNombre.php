<?php

class filtroNombre extends Plan
{


    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function filtrarNombre()
    {
        $nombre = $_POST['Nombre'];
        $sql = "SELECT * FROM planes where Nombre LIKE  '%" . $nombre . "%' ";

        $result = $this->conn->query($sql);
        return $result;
    }

    public function showfiltrado()
    {
        /* echo "<form action='' method='post' id ='filtroNombre' class='sign-in-form'>";
        echo "<p>Nombre: <input type='text' name='Nombre' size='30'> </p>";
        echo "<p>";
        echo "<input type='submit' value='Buscar'>";
        echo "</p>";
        echo "</form>"; */
        // AÑADIR UN REINICIO DE ARRAY CUANDO ESTÁN TODOS GUARDADOS --
        $result = $this->filtrarNombre();
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
            }
        } else {
            echo "no hay resultados";
        }
    }
}
