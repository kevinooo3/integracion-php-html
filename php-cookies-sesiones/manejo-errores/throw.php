<?php 
    try{
        $pet = readline("QUE MASCOTA DESEA ADQUIRIR \n");
        if($pet != "gato" && $pet != "perro")
            throw new exception ("Lo sentimos la mascota {$pet} no tenemos varon ");
        else{
            echo "gracias por adoptar en breve enviaremos el animal a su casa";
        }
    }
    catch (throwable $e){
       echo $e->getMessage();

    };