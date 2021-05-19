<?php class Admin extends Conexion
{

    public function getUser()
    {
        $sql = "SELECT * FROM usuario where ID_Usuario != 1";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getCountUser()
    {
        $sql = "SELECT count(*) AS 'RecuentoUsuarios' FROM usuario";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getPlans()
    {
        $sql = "SELECT * FROM planes";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getCountPlans()
    {
        $sql = "SELECT count(*) AS 'RecuentoPlanes' FROM planes";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function showUser()
    {
        $result = $this->getUser();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td class='identificador'>" . $row["ID_Usuario"] . "</td>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td>" . $row["Correo"] . "</td>";
                echo "<td><img class='delete' style='width:20px' src='../public/img/delete.png'></td>";
                echo "</tr>";
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
                echo "<tr>";
                echo "<td class='identificadorPlan'>" . $row["ID_PLAN"] . "</td>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td><img class='deletePlan' style='width:20px' src='../public/img/delete.png'></td>";
                echo "</tr>";
            }
        } else {
            echo "no hay resultados";
        }
    }

    function delete($id = null)
    {
        $sql = "DELETE FROM usuario WHERE ID_USUARIO= " . $id;
        $this->conn->query($sql);
        $sql = "DELETE FROM relacion WHERE ID_USUARIO= " . $id;
        $this->conn->query($sql);
    }

    function deletePlan($id = null)
    {
        $sql = "DELETE FROM planes WHERE ID_PLAN= " . $id;
        $this->conn->query($sql);
        $sql = "DELETE FROM relacion WHERE ID_PLAN= " . $id;
        $this->conn->query($sql);
    }
}
