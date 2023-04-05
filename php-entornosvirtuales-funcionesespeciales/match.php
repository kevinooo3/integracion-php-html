<?php
    //MATCH REEMPLAZA A IF ELSE Y SWITCH
    // MATCH ES COMO QUE DIGA PASAME LA LLAVE Y PRUEBA cada llave con cada puerta y en caso habra devuelve el valor que se encuentra adentro
    function obtenerPais($pais){
        return match($pais){
            "PE"=>"PERU",
            "COL"=>"COLOMBIA",
            "BOL"=>"BOLIVIA",
            "ECU"=>"ECUADOR",
            default => "no encontramos nada relacionado"
        };
    }
    //echo(obtenerPais("PE"));
    echo(obtenerPais("gigi"));// deberia devolver que no encontramos nada
    