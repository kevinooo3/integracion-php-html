<?php
    // Establecer zona horaria personalizada
        // date_default_timezone_set("America/Mexico_City");
        // date_default_timezone_get();
    
    // Obtener fecha actual 
        //  $now =date("Y-m-d H:i:s");
        // $now = date_create(); // devuelve un objeto datetime

    // Convertir string a time
        //Esto devuelve en unix es decir la cantidad de segundos que paso desde 1970 hasta la fecha actual
            // $now =date("Y-m-d H:i:s");
            // echo date("Y-m-d H:i:s",strtotime($now));
            // echo date("Y-m-d H:i:s",strtotime("17 abril 2022"));
            // echo date("Y-m-d H:i:s",strtotime("+1 week"));
            // echo date("Y-m-d H:i:s",strtotime("next Monday"));
            // echo date("Y-m-d H:i:s",strtotime("last wednesday"));
    // Fechas Inmutables

       // $date_inmutable = new DateTimeInmutable();
    
    //Diferencia de tiempo
        // $today = new DateTime();
        // $mrmichi_birth =  new DateTime("2020-03-25");
        // $interval = $mrmichi_birth->diff($today);
        // echo $interval->format("%y años, %m meses, %d días"); 

    // Crear desde un formato dado
        // $date = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2022");
        // echo $date->format("Y-m-d H:i:s"); 

    //Modificar una fecha
            // $date = new DateTime();
            // $date->modify("+1 day");
            // echo $date->format("Y-m-d H:i:s");

