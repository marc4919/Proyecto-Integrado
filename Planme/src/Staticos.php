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
        return date("Y-m-d H:i:s");
    }
}
