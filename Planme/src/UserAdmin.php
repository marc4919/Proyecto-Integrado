<?php class UserAdmin extends User
{

    public function getUser()
    {
        $sql = "SELECT * FROM `usuario` INNER JOIN `relacion` on usuario.ID_Usuario = relacion.ID_Usuario INNER JOIN planes on relacion.ID_PLAN = planes.ID_PLAN where usuario.ID_Usuario = '" . $_SESSION['Usuario'] . "'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function showUser()
    {
        $result = $this->getUser();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class= 'cajaPlan'>";
                echo "<div class= 'card'>";
                echo "<img class='img' id='img-1' src='img/gallery-plans/" . $row["Categoria_Principal"] . ".png'>";
                echo "<div class='planname'><h1>" . $row["Nombre"] . "</h1></div>";
                echo "<div class='plandesdatos'>" . $row["Descripcion"] . "</div>";
                echo "<div class='plandesdatos'>" . Staticos::formatoMoneda($row["Precio"]) . "</div>";
                //echo "<div class='plandescription'>" . $row["Descripcion"] . "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "no hay resultados";
        }
    }

    public function getCreation()
    {
        $sql = "SELECT * FROM `usuario` INNER JOIN `planes` on usuario.ID_Usuario = planes.ID_Creador WHERE usuario.ID_Usuario = '" . $_SESSION['Usuario'] . "'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function showCreation()
    {
        $result = $this->getCreation();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class= 'cajaPlan'>";
                echo "<div class= 'card'>";
                echo "<img class='img' id='img-1' src='img/gallery-plans/" . $row["Categoria_Principal"] . ".png'>";
                echo "<div class='planname'><h1>" . $row["Nombre"] . "</h1></div>";
                echo "<div class='plandesdatos'>" . $row["Descripcion"] . "</div>";
                echo "<div class='plandesdatos'>" . Staticos::formatoMoneda($row["Precio"]) . "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "no hay resultados";
        }
    }
}
