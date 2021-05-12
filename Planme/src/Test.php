<?php
class Test extends Conexion
{
    function get($id = null)
    {
        parent::__construct();
        $sql = "SELECT * FROM provincias";
        $result = $this->conn->query($sql);
        return $result;
    }

    function show($id = null)
    {
        $result = $this->get();
        if ($result->num_rows > 0) {
            $datos = $result->fetch_all(MYSQLI_ASSOC);
            echo json_encode($datos);
        }
    }
}
