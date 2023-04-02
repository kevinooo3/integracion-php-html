<?php
    class ErrorMichi extends Exception {
        public function getMensaje(){
            return "error desde la funcion interna creada personalizada ";
        }
    }

    try{
        $ingreso = readline("Ingresa el gato: \n");
        if($ingreso == "michi")
            throw new ErrorMichi("error desde throw");
    }
    catch(throwable $e){
        echo $e->getMessage();
        echo "       " . $e->getMensaje();

    }