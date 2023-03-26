<?php
    //EXPLODE:CONVIERTE STRING EN ARRAY
    $cadenaOrigen ="lana,fiorella,gabi";
    $arrayFinal = explode(",",$cadenaOrigen);
    echo("Array :\n");
    var_dump($arrayFinal);
    echo(" \n");

    //IMPLODE : CONVIERTE UN ARRAY EN CADENA
    $arrayOrigen=["pepe","ramos","marcelo"];
    // observacion el implode te permite delimitar con lo que quieras cada uno de los valores
    $cadenaFinal=implode(" webadas ",$arrayOrigen);
    echo("CADENA FINAL :\n");
    var_dump($cadenaFinal);
    echo(" \n"); 
?>