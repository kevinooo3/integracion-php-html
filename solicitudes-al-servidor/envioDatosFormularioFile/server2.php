<?php
    echo "<pre>"; // esto permite debuguear mejor para tener mejor visibilidad

    var_dump($_FILES); //permite ver que hay dentro del metodo files
    // LAS IMAGENES SE GUARDAN EN UNA RUTA TEMPORAL CUANDO SON ENVIADAS AL SERVIDOR
    //PARA GUARDARLAS PERMANENTEMENTE EN ALGUNA RUTA EN EL SERVER NECESITAMOS LA NUEVA RUTA Y LA RUTA DONDE SE ECONTRABA
    $nombreImagen = $_FILES["image"]["name"];
    $rutaActual = $_FILES["image"]["tmp_name"]; //ruta temporal
    $rutaNueva = "./images/$nombreImagen"; // ruta permanente
    //move_uploaded_file cambia la ruta de la imagen a la nueva ruta permanente
    move_uploaded_file($rutaActual,$rutaNueva);

    echo $nombreImagen;

    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Esta es la imagen que guarde en mi ruta local permanente y que ahora la muestro en mi doc html llamandola desde mi ruta local o permanente.</h1>
    <img src="<?=$rutaNueva?>" alt="<?= $nombreImagen?>">
</body>
</html>
