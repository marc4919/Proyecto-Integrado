<?php class Admin extends Conexion
{

    public function getUser()
    {
        $sql = "SELECT * FROM usuario where ID_Usuario != 1";
        //echo $sql;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getCountUser()
    {
        $sql = "SELECT count(*) AS 'RecuentoUsuarios' FROM usuario";
        //echo $sql;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getPlans()
    {
        $sql = "SELECT * FROM planes";
        echo $sql;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getCountPlans()
    {
        $sql = "SELECT count(*) AS 'RecuentoPlanes' FROM planes";
        //echo $sql;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function showUser()
    {
        $result = $this->getUser();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID_Usuario"] . "</td>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "</tr>";
                echo "</table>";
            }
        } else {
            echo "no hay resultados";
        }
    }

    public function showCountUser()
    {
        $result = $this->getCountUser();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p>" . $row["RecuentoUsuarios"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "no hay resultados";
        }
    }

    public function showCountPlans()
    {
        $result = $this->getCountPlans();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p>" . $row["RecuentoPlanes"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "no hay resultados";
        }
    }

    public function showPlans()
    {
        $result = $this->getPlans();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<table>";
                echo "<tr>";
                echo "<td>" . $row["ID_PLAN"] . "</td>";
                echo "<td>" . $row["ID_Creador"] . "</td>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td>" . $row["Descripcion"] . "</td>";
                echo "</tr>";
                echo "</table>";
            }
        } else {
            echo "no hay resultados";
        }
    }
}
