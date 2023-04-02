<?php
    

    // $resultado = 20/0; // si imprimimos este error se ve feo en codigo.

    try{
        $resultado = 20/0;
    }catch(throwable $e){
      // echo  $e->getMessage(); // muestra un mensaje de error mas entendible
        echo "Uy no podemos dividir por zero causa"; // podemos personalizar el mensaje de error
    
    };