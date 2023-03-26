<?php
    //VARIABLES
    //esta variable tiene la propiedad que peude cambiar en el futuro
    $nombre = "Kevin";
    $nombre = "kakaroto";
    //comprobacion de que es lo que imprime
    echo($nombre);
    echo("\n");
    //comprobe que esto me imprime kakaroto, confirmando que toma el ultimo valor asignado
    //--------------------------------------------------------------------------------------
    //CONSTANTE
    //no puede cambiarse en el futuro
        define("nombreVariable","pepe");
        define("numero",12);
    // el uso de la variable en otros metodos no necesita de $, solo debemos poner el nombre que pusimos dentro de las comillas
        echo(nombreVariable . " tiene una edad : ". numero);
        echo("\n");
?>