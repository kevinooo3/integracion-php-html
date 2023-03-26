<?php
    //Uso del if elseif y else
        // $genero=readline("Ingrese el genero:\n 1.masculino \n 2.femenino \n 3.gg \n");
        // if($genero == 1){
        //     echo("eres macho pecho peludo");
        // }
        // elseif($genero == 2){
        //     echo("eres una mujercita bien puta");   
        // } 
        // else{
        //     echo("eres un maricueca ctm");
        // }
    //Uso del switch
    $color = readline("Ingrese el color \n 1.Amarillo \n 2.Rojo \n ");
    switch($color){
        case 1:
            echo("pikachu \n");
            break;
        case 2:
            echo("sharmander \n");
            break;
        default:
            break;
    };
?>