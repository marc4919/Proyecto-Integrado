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
                echo "<div class='cajaGuardados'>";
                echo "<h5>" . $row["Nombre"] . "</h5>";
                echo "<p>" . $row["Descripcion"] . "</p>";
                //echo "<p>" . $row["Categoria_Principal"] . "</p>";
                //echo "<p>" . $row["Categoria_Secundaria"] . "</p>";
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
                echo "<div class='cajaCreados'>";
                echo "<p>" . $row["Nombre"] . "</p>";
                echo "<p>" . $row["Descripcion"] . "</p>";
                //echo "<p>" . $row["Categoria_Principal"] . "</p>";
                //echo "<p>" . $row["Categoria_Secundaria"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "no hay resultados";
        }
    }


    public function updateUser() // CAMBIAR MÉTODO A OTRA CLASE
    {
    }
}
