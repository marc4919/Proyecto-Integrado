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

    public function showCountUser()
    {
    }

    public function showCountPlans()
    {
    }
}
