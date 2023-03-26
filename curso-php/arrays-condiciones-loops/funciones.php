<?php
    //Funciones clasicas
        // este ejemplo determina si eres puberto.
        $edad=(int) readline("Ingrese su edad: ");
        identificadorPubertos($edad);
        function identificadorPubertos($age){
                if($age >=0 && $age<=10){
                    echo("eres un bb!!!!");
                }
                elseif($age >=11 && $age<=20){
                    echo("eres un puberto con todas las de haber !!!!");
                }
                else{
                    echo("eres un viejo afeitate !!!!");
                }    
        }
        echo("\n");

        

?>