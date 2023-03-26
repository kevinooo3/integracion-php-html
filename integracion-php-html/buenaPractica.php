<!-- LAS BUENAS PRACTICAS DICEN QUE DEBEMOS DE HACER LOS CALCULOS Y LA LOGICA EN PHP Y HTML SOLO DEBEMOS USARLO PARA IMPRIMIR -->
<!-- A continuacion haremos un ejercicio de impresion de la tabla del 3 -->
<?php 
     $tabla_del_3 =array();   
     for($i=1;$i<=10;$i++){
        // aqui hacemos la logica
        $resultado = 3 * $i;
        $texto = "3 x $i = $resultado";
        array_push($tabla_del_3,$texto);
     }

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
    <h1>Tabla del 3</h1>
    <!-- aqui solo nos limitamos a imprimir los datos de un array, eso es bueno eso es legible eso es optimo. -->
    <ul>
        <?php foreach($tabla_del_3 as $value):?> 
            <li><?=$value?></li>
        <?php endforeach?> 
    </ul>
    

</body>
</html>