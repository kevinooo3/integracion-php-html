<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizacion</title>
</head>
<body>
    <form action="servidor.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" >
        <br>
        <label for="usuario">usuario</label>
        <input type="text" name="usuario" id="usuario" >
        <br>
        <label for="correo">correo</label>
        <input type="text" name="correo" id="correo" >
        <br>
        <label for="edad">edad</label>
        <input type="text" name="edad" id="edad" >
        <br>
        <button>Enviar formulario</button>
    </form>
</body>
</html>