

<!-- ENVIO DE DATOS DEL FORMULARIO A SERVER.PHP CON EL METODO GET -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por get</title>
</head>
<body>
    <form action="server2.php" method="post" >
        <!-- action es como decir a donde quieres que envie los datos -->
        <!-- post no envia los datos por url pero aun asise puede ver los datos sensibles inspeccionando la pag web y dirigiendonos a network-->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad">
        
        <button>Mandar Formulario</button> 
        

    </form>
</body>
</html>



