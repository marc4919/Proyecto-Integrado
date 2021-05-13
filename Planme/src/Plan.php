<?php class Plan extends Conexion
{
    private $id;
    private $Creador;
    private $Nombre;
    private $Descripcion;
    private $Localizacion;
    private $Transporte;
    private $Precio;
    private $Categoria1;
    private $Categoria2;


    public function __construct($id = "", $Creador = "", $Nombre = "", $Descripcion = "", $Localizacion = "", $Transporte = "", $Precio = "", $Categoria1 = "", $Categoria2 = "")
    {
        parent::__construct();
        $this->id = $id;
        $this->Creador = $Creador;
        $this->Nombre = $Nombre;
        $this->Descripcion = $Descripcion;
        $this->Localizacion = $Localizacion;
        $this->Transporte = $Transporte;
        $this->Precio = $Precio;
        $this->Categoria1 = $Categoria1;
        $this->Categoria2 = $Categoria2;
    }
}
