
<?php
//primera forma de hacer un array
    $edades = array(
        12,13,14
    );
    var_dump($edades[1]);
    $teenager = [12,13,14];
    // segunda forma de hacer un array
    var_dump($teenager[0]);
    var_dump("\n");
    // array con indices 
    $listaEdades = array(
        "mario" => 12,
        "juan" => "gg",
        "pedro" => "13",
    );
    var_dump("ESTA ES LA LISTA CON INDICES: {$listaEdades["mario"]}");
    //array de arrays
    $listaArreglos =[
        $listaEnteros =[12 ,13,14
        ],
        $listaDecimales =[
            12.4,13.4,14.5
        ],
    ];
    var_dump("ARRAY DE ARRAYS {$listaArreglos[1][1]}\n");
    //arrrays con subindices
    $datosBanco =array(
        $apellidos=array(
            "kevin" => "Rua",
            "Diego" =>"Perez",
            "Ivan" => "Ayala",
            "Gianinna"=>"Aron"
        ),
        $edades = array(
            "kevin"=> 28,
            "Diego"=>20,
            "Ivan"=>33,
            "Gianinna" => 39
        )
        );
    var_dump("Estos son los datos banco: {$datosBanco[0]["kevin"]}");
?>