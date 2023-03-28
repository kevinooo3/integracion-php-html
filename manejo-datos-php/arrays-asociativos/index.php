<?php
    // arrays asociativos
     $jugadores =[
        "enano"=> "messi",
        "alto"=>"cr7",
        "negro"=>"mbappe"
     ];
    //echo $jugadores["negro"];
        // caminar por el array aplicando funcion
            function convertirMayuscula($valor){
                echo mb_strtoupper($valor);
            }

        // array_walk($jugadores,"convertirMayuscula"); // le pasamos el array y el nombre de mi funcion que se aplicara a cada uno de los valores
    // preguntar si un elemento existe en un array
        // var_dump (in_array("messi",$jugadores)); // retorna true o false
        // var_dump (array_key_exists("alto",$jugadores)); // retorna true o false
    // //imprimir solo llaves o keys
        // var_dump(array_keys($jugadores));
    // // imprimir solo valores
        // var_dump(array_values($jugadores));
    // ordenar en base a elementos
        // sort($jugadores);
        // var_dump($jugadores);
    // ordenar en base a llaves
        // ksort($jugadores);
        // var_dump($jugadores);
    //revanar sintaxis array_slice(tuArray,cantidad elementos que quitara apartir del pos 0)
       //var_dump(array_slice($jugadores,2)); 
    //agrupar elementos para una sola llave
        // var_dump(array_chunk($jugadores,2)); 
    // shift quita el primer elemento del array
        // array_shift($jugadores);
        // var_dump($jugadores);
    // unshift quita el primer elemento del array
        // array_unshift($jugadores,"chiroque");
        // var_dump($jugadores);
    // push agrega un elemnto al final
        // array_push($jugadores,"chiroque");
        // var_dump($jugadores);
    // pop elimina un elemnto al final
        // array_pop($jugadores);
        // var_dump($jugadores);
    // flip intercambia keys con valores
        //var_dump(array_flip($jugadores));
     
    // ------------------- METODOS DE COMPARACION DE ARRAYS--------------------------------
        // $marvel = ["spider-man","hulk","iron-man","kevinooo"];
        // $dc  =  ["superman","batman","iron-man","kevinooo"];
        // var_dump(array_diff($marvel,$dc)); //imprime elementos de marvel que no estan en dc
    // ----------------UNION DE DOS ARRAY ------------------
         $marvel = ["spider-man","hulk","iron-man","kevinooo"];
         $dc  =  ["superman","batman","iron-man","kevinooo"];   
         var_dump((array_merge($marvel,$dc)));