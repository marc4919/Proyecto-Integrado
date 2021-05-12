<?php class User extends Conexion
{
    private $User;
    private $Password;
    private $Correo;
    private $Nombre;
    private $Tipo;

    public function __construct($User="", $Password="", $Correo="", $Nombre="", $Tipo="")
    {

        $this->user = $User;
        $this->Password = $Password;
        $this->Correo = $Correo;
        $this->Nombre = $Nombre;
        $this->Tipo = $Tipo;
    }

    public function Cambiar_Nombre()
    {
    }

    public function Cambiar_Correo()
    {
    }
}
