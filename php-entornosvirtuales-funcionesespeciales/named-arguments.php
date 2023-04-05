<?php
    function getInfoPerson($name,$age,$country){
        return " $name tiene la edad $age y vive en $country";
    }
// la peculiaridad es que le puedo pasar los argumentos desordenados al momento de llamar a la funcion , porque cada llave esta asignada a un valor
   echo getInfoPerson(
        name:"pingaman",
        country:"alemania",
        age:27

    );