<?php

class Staticos
{

    public static function formatoMoneda($valor)
    {
        return number_format($valor, 2, ",", ".") . "€";
    }

    public static function Date()
    {

        $time = time();
        echo date("d-m-Y (H:i:s)", $time);
    }
}
