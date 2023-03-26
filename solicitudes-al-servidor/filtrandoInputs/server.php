<?php
    $is_float = filter_var("0.9",FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_THOUSAND); 
    $is_email = filter_var("michicito@hotmail.com",FILTER_VALIDATE_EMAIL);
    $is_ip = filter_var("127.0.0.1",FILTER_VALIDATE_IP);
    $is_url = filter_var("https://platzi.com",FILTER_VALIDATE_URL);
    echo("<pre>");
    //SINO PASA LA VALIDACION DEVUELVE FALSE PERO SI PASA LA VALIDACION DEVUELVE EL VALOR DE LA MISM VARIABLE.
        echo("$is_float");
        echo("\n");
        echo("$is_email");
        echo("\n");
        echo("$is_ip");
        echo("\n");
        echo("$is_url");
        echo("\n");
    
    echo("</pre>");