<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- <h1> Enviando al server con inputs clasicos , los mas sencillos o estandares </h1>
        <form action="server.php" method="post">
            <label for="nombre">Fruta</label>
            <input type="text" name="nombre" id="nombre">

            <label for="apellido">Fruta</label>
            <input type="text" name="apellido" id="apellido">
            
            <button>Enviar formulario</button>
        </form> -->
        <!-- <h1>Enviando al server con inputs en forma de array , los mas sencillos o estandares </h1>
        <form action="server.php" method="post">
            <label for="Fruta1">Fruta 1</label>
            <input type="text" name="arrayFruta[]" id="Fruta1">
             debemos poner el mismo nombreArray[] en name a todos los inputs 

            <label for="Fruta2">Fruta 2</label>
            <input type="text" name="arrayFruta[]" id="Fruta2">
            
            <button>Enviar formulario</button>
        </form> -->

        <!-- <h1>Enviando al server con inputs en forma de array asociativos </h1>
        <form action="server.php" method="post">
            <label for="Fruta1">Fruta 1</label>
            <input type="text" name="arrayFruta[Fruta1]" id="Fruta1">
            debemos poner el mismo nombreArray[] en name a todos los inputs

            <label for="Fruta2">Fruta 2</label>
            <input type="text" name="arrayFruta[Fruta2]" id="Fruta2">
            
            <button>Enviar formulario</button>
        </form> -->

        <!-- <h1>Enviando al server con inputs en forma de array asociativos </h1>
        <form action="server.php" method="post">
            <label for="Fruta1">Fruta 1</label>
            <input type="text" name="arrayFruta[Fruta1]" id="Fruta1">
            debemos poner el mismo nombreArray[] en name a todos los inputs 

            <label for="Fruta2">Fruta 2</label>
            <input type="text" name="arrayFruta[Fruta2]" id="Fruta2">
            
            <button>Enviar formulario</button>
        </form> -->

        <!-- <h1>Enviando al server con inputs en forma de array asociativos </h1>
        <form action="server.php" method="post">
            <label for="Fruta1">Fruta 1</label>
            <input type="text" name="arrayFruta[Fruta1]" id="Fruta1">
             debemos poner el mismo nombreArray[] en name a todos los inputs  

            <label for="Fruta2">Fruta 2</label>
            <input type="text" name="arrayFruta[Fruta2]" id="Fruta2">
            
            <button>Enviar formulario</button>
        </form> -->


        <!-- <h1>Enviando al server con inputs en forma de checks </h1>

            <h1>Que paises te gustaria conocer ? </h1>
            <form action="server.php" method="post">
                <label for="Peru">Peru</label>
                <input type="checkbox" name="check1" id="Peru">

                <label for="Brasil">Brasil</label>
                <input type="checkbox" name="check2" id="Brasil" >

                <label for="Uruguay">Uruguay</label>
                <input type="checkbox" name="check3" id="Uruguay" value="le gustaria conocer a alaska la youtuber">
                
                <button>Enviar formulario</button>
            </form> -->

        <!-- <h1>Enviando al server con inputs en forma de checks </h1>

        <h1>Que pokemon eres: ? </h1>
        <form action="server.php" method="post">
            <label for="sharmander">sharmander</label>
            <input type="radio" name="radio" id="sharmander" value="harmander">

            <label for="pikachu">pikachu</label>
            <input type="radio" name="radio" id="pikachu" value="pikachu">

            <label for="sharizar">sharizar</label>
            <input type="radio" name="radio" id="sharizar" value="sharizar">
            
            <button>Enviar formulario</button>
        </form> -->


        <h1>Enviando al server con inputs en forma multiples files </h1>
        <h1>Sube varios archivos ? </h1>
        <form action="server.php" method="post" enctype="multipart/form-data">
            <label for="archivos">Selecciona tus archivos</label>
            <input type="file" multiple name="galeria[]" id="archivos" > 
            <!-- multiple es usado cuando se trata de subir varios archivos -->
            
            <button>Enviar formulario</button>
        </form>
</body>
</html>