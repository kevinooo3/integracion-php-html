<?php
    // primer metodo para debuggear con var_dump()
    // var dump es un metodo de impresion
    // en esta parte estoy creando un array para usarlo en el var_dump()
        $personasEdades =[
            "juan"=>12,
            "pedro"=> 24,
            "ivan"=>33
        ];
        echo("metodo var_dump \n");
        var_dump($personasEdades);
        echo("\n");

    // segundo metodo de debuggeo print_r()
        echo("Impresion con el metodo print_r()");
        print_r($personasEdades);
        echo("\n");
?>