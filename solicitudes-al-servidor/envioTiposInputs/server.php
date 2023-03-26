<?php
echo ("<pre>");
    //Impresion de datos obtenidos de inputs clasicos
        // echo ($_POST["nombre"]);
        // echo ($_POST["apellido"]);
    //Impresion de datos obtenidos de inputs que fueron enviados como arrays
        // echo ("Impresion de inputs enviados por un array");
        // var_dump($_POST["arrayFruta"]);
    //Impresion de datos obtenidos de inputs que fueron enviados como arrays asociativos
        // echo ("Impresion de inputs enviados por un array asociativo");
        //  var_dump($_POST["arrayFruta"]["Fruta1"]);
    //Impresion de datos obtenidos de inputs que fueron enviados como checkbox
        // echo ("Impresion de datos obtenidos de inputs que fueron enviados como checkbox");
        // var_dump($_POST["check1"]);// si dejamos en check muestra on
        // var_dump($_POST["check2"]);// si no marcamos en check muestra un error , haciendo referencia que sino lo marcas el server no recibe la llave check2 y no entiende que es check2
        // var_dump($_POST["check3"]);// si dejamos en check muestra el contenido de value
    //Impresion de datos obtenidos de inputs que fueron enviados como radio
        // echo ("Impresion de datos obtenidos de inputs que fueron enviados como radio");
        // echo("\n");
        // var_dump($_POST["radio"]);// como el array tomara solo un radio ya que no puede haber dos activos al mismo tiempo , por eso solo es necesario una llave solamente.
    //Impresion de datos obtenidos de inputs que fueron enviados como radio
        // echo ("Impresion de datos obtenidos de inputs que fueron enviados como radio");
        // echo("\n");
        // var_dump($_POST["radio"]);// como el array tomara solo un radio ya que no puede haber dos activos al mismo tiempo , por eso solo es necesario una llave solamente.
    //Impresion de mutiples archivos
        echo ("Impresion de datos obtenidos de inputs que fueron enviados como multiples files");
        echo("\n");
        var_dump($_FILES["galeria"]);// como el array tomara solo un radio ya que no puede haber dos activos al mismo tiempo , por eso solo es necesario una llave solamente.
        
echo ("</pre>");
