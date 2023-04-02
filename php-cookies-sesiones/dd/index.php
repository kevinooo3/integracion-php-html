<?php

// para usar dd en la impresion necesitamos descargar el paquete var-dumper: composer require symfony/var-dumper
    require("vendor/autoload.php");

    class Michi{
        protected $patas = [];
        protected $color;

        function __construct($color){
            $this->color=$color;
            for($i=0;$i<4;$i++)
                $this->patas[$i]= new PataDeMichi();
        }
    }

    class PataDeMichi {
        protected $nails = 4;
        protected $description= "Tiene manchitas";

        function getDescription(): string {
            return $this->description;
        }
    }

     $casa_de_michis = array(
        "nombre"=>  "michilango",
        "ubicacion" => [
            "pais"=> "Mexico",
            "ciudad"=> "Ciudad de Mexico",
            "colonia"=> "Doctores",
            "numero"=> 27
        ],
        "numero_de_michis" => 3,
        "michis" => [
            new Michi("blanco"),
            new Michi("marron"),
            new Michi("rojo"),
        ]
     );

     echo "<pre>";
     dd($casa_de_michis);
     echo "</pre>";
