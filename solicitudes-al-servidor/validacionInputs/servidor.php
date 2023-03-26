<?php   
    if(isset($_POST["nombrecito"]) && ! empty($_POST["nombrecito"])){
        echo("Hola {$_POST["nombrecito"]} , 😁");
    }
    else{
        echo("OE CAUSA INTRODUCE BIEN TU NOMBRE EN EL CAMPO PS , 😒");
    }
