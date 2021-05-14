<?php

class Staticos{
    
    public static function formatoMoneda($valor)
    {
        return number_format($valor, 2, ",", ".") . "€";
    }

}


    