
<!-- El metodo request es la union de get y post -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por request</title>
</head>
<body>
    <form action="server2.php" method="request" >
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad">
        
        <button type="submit">Mandar Formulario</button> 
        

    </form>
</body>
</html>