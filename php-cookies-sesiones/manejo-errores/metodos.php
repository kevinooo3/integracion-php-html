<?php
    // $resultado = 20/0; // si imprimimos este error se ve feo en codigo.
    try{
        $resultado = 20/0;
    }catch(throwable $e){
      // echo  $e->getMessage(); // muestra un mensaje de error mas entendible
      // echo  $e->getCode(); // obtiene el codigo del error
      // echo  $e->getFile(); // obtienes la ruta del archivo desde donde el error ocurre
      echo  $e->getLine(); //  obtenemos la linea desde donde obtenemos el error 
    };