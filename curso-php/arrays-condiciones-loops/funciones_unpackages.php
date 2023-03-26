<?php
    // USO DE UNPACKAGE ...nombreArray
    // el unpackage sirve para sacar los elementos de un array directamente y tratarlos comonos plasca.
    $edades= array(
        1,2,3
    );
    $edades2= array(
        4,5,6
    );
    $edadesCombinadas= array(

    );
    var_dump($edades);
    var_dump(...$edades);
    // ... ES USADO COMO PARAMETRO DE UNA FUNCION , CUANDO NO SE SABE LA CANTIDAD DE ELEMENTOS QUE INTRODUCIRA EL USARIO.
    // Mas que todo sirve cuando se desea usar argumentos ilimitados cuando se llama la funcion.
    // para este caso yo puedo llamar a la funcion sumar con dos o 3 o cuantos argumentos quiera ,igual funciona como ejemplo suma(2,3) o suma(2,3,4,5,22)

    function suma(...$numeros){
        $sum=0;
        foreach($numeros as $val){
            $sum+=$val;
        }
        return $sum;
    }
    echo("sube sube ppk");
    $resultador=suma(2,4,5);
    echo("resultado :" . $resultador);
?>