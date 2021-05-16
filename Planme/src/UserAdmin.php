<?php class UserAdmin extends Conexion
{

    public function getUser()
    {


        $sql = "SELECT * FROM usuario";
        echo $sql;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getCountUser()
    {


        $sql = "SELECT count(*) FROM usuario";
        echo $sql;
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


        $sql = "SELECT count(*) FROM planes";
        echo $sql;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function showUser()
    {
        $result = $this->getUser();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p>" . $row["Nombre"] . "</p>";
                //echo "<p>" . $row["Descripcion"] . "</p>";
                echo "<p>" . $row["Correo"] . "</p>";
                echo "<p>" . $row["Password"] . "</p>";
                //echo "<p>" . $row["Categoria_Principal"] . "</p>";
                //echo "<p>" . $row["Categoria_Secundaria"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "no hay resultados";
        }
    }

    public function updateUser()
    {
    }

    public function updateTest()
    {
    }
}
