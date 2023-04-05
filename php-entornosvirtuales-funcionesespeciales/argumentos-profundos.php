<?php
    // array como parametros
        // function retornarArray($numeros = array(2,3,4)){
        //     return array_sum($numeros);

        // }
        // echo retornarArray();
    // la coma al final de los parametros
        // function sumarNumeros($n1 =1, $n2 =2, $n3 =3, ){
        //     return $n1*$n2*$n3;
        // }
        // echo sumarNumeros();
    // parametros por defecto 
            function multiplicarParametros($n1 ,$n2 =3){
                return $n1*$n2;
            }
            echo multiplicarParametros(2);
            // los parametros por defecto siempre funcionan si ponemos todos los parametros con valores por defecto o a partir del segundo parametro hacia adelante
            //nunca de los nuncas debemos usar solo el primer parametro por defecto y los siguientes sin asignar por que traera errores.
