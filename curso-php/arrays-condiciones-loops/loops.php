<?php
    // uso del for
        // echo("USO DEL FOR CLASICO \n");
        // for($i =0 ; $i<10 ; $i++){
        //     echo($i);
        // }
        // echo("\n");
        
    //Uso del foreach
        $listaJugadores = array(
            "paolo"=> 38,
            "pizarro"=> 40,
            "farfan"=> 37,
            "acasiete"=> 40
        );
        echo("USO DEL FOREACH: \n");
            // foreach($listaJugadores as $jugador => $edad) {
            //     echo("El jugador {$jugador} tiene la edad : {$edad} \n"); 
            // };
        //FOREACH CON BREAK con el objetivo de que pare de usar recursos del cpu cuando encuentre algun item que le solicitemos.
            foreach($listaJugadores as $jugador => $edad) {
                echo("El jugador {$jugador} tiene la edad : {$edad} \n"); 
                if($jugador == "pizarro"){
                    break;
                }
            };
    //Uso del while
            // $numero = 10;
            // while($numero<20){
            //     echo("numero : {$numero} \n");
            //     $numero++;
            // }
    //Uso del do while
            // $numero = 10;
            // do{
            //     echo("numero : {$numero} \n");
            //     $numero++;
            // } 
            // while($numero<20);    
    echo("\n");
?>