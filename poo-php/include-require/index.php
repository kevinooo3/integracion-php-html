<?php
    include("prueba-include.php"); // en caso haya algun fallo solo muestra warning, pero el programa sigue corriendo
    require("prueba-require.php"); // en caso haya algun fallo muestra un error fatal que hace que pare todo el programa

    require_once("prueba-require.php"); // en caso nos webeemos en llamar varias veces un mismo archivo existe require once para evitar llamarlos varias veces, con una es suficiente.
   echo  saludarConInclude();
   echo  saludarConRequire();