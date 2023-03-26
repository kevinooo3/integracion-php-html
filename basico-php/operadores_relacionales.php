<?php
    //= sirve para asignar un valor a una variable
        $dendi = 22;
    //== sirve para comparar dos valores en caso de 
        var_dump(2 == "2");
        //devuelve true ya que 2 es igual a 2 en contenido
        // lo q hace php es extraer el 2 de "2" para compararlo de forma numerica 
    // === sirve para comparar el tipo de dato dos valores, es decir si ambos son string o numericos etc
        var_dump(3=== "3");
        //devuelve false ya que uno es numerico y el otro 3 es string
    //  != diferente y !== diferente de tipo de dato
        var_dump(1!=2);
        var_dump(2!==2);
    // mayor y mayor igual
        var_dump(1<"3");
        var_dump(3<="3");
    //menor y menor igual
        var_dump(1>"3");
        var_dump(3>="3");
    /* <=> este operador actua por casos
        caso1 : devuelve -1 en 1<=>2
        lo interpreta como que uno es menor a 2 , coge el < y devuelve -1
        caso2 : devuelve 0 en 2<=>2
        lo interpreta como que 2 es igual a 2 , coge el = y devuelve 0
        caso3 : devuelve 1 en 3<=>2
        lo interpreta como que 3 es mayor a 2 , coge el > y devuelve 1
    */  
        var_dump(1<=>3);//devuelve -1
        var_dump(3<=>3);//devuelve 0
        var_dump(5<=>3);//devuelve 0
     /* ?? el operador doble signo de interrogacion
        sintaxis: valor1 ?? valor2 ?? valor3
        te bota el primer valor que no sea null o undefined
     */   
        $valorDefinido = "KAKA";
        var_dump($valorNoDefinido1 ?? $valorDefinido ?? $valorNoDefinido2);// debe devilver kaka ya que es el unico valor definido

    ?>  