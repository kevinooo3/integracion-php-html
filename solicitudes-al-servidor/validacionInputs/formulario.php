<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="servidor.php" method="post">
        <h1>Cual es tu nombre causa</h1>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombrecito" id="nombre">
            <!-- ISSET :Si name no tiene ningun valor adentro isset retornara un false
            Si name tiene algun valor no importa si es vacio pero tiene algun valor dentro de las comillas isset retornara un true 
             EMPTY:En cambio empty comprueba si el value que esta dentro de name contiene al menos un caracter o no contiene nada , retorna true si no hay nada y false si encuentra por lo menos algun carcater -->
        <button>enviar formulario</button>
    </form>
    
</body>
</html>