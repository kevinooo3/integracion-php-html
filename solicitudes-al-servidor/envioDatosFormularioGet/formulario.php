
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
    <form action="server.php" method="get">
        <!-- action es como decir a donde quieres que envie los datos -->
        <!-- get permite mandar los datos por url, esto no es recomendado ya que es poco seguro -->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombregg" id="nombre">

        <label for="edad">Edad</label>
        <input type="text" name="edadgg" id="edad">
        <button>Mandar Formulario</button> 
        <!-- debemos revisar la url despues de clickear mandar formulario y verificar que depues de la ruta aparece el signo? con nuestros datos de los inputs -->

    </form>
</body>
</html>