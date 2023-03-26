<?php
        //la validacion por formulario evita estar input por input y de fresa valida todo el formulario
    
    var_dump($_POST);
        if(!empty($_POST["form-nombre"])){
        echo("bien causa, exitos 😁");
    }
    else{
        echo("metele datos al campo pe varon 😁");
    }