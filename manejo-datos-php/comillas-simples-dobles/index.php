<?php
 //El caso de la comilla simple
 // caso : imprimir comilla simple
   //  echo ('quiero imprimir una comilla simple dentro de la cadena : \' ');
   //  echo("\n"); 
 // caso : imprimir backslash
   //  echo ('quiero imprimir backslash  dentro de la cadena : \\ ');
   //  echo("\n");
 // caso : COMO USAR VARIABLES DENTRO CADENAS
      // $nombre = "kevin";
      // // en caso queramos usar la comilla simple debemos usar la contatenacion por punto
      // echo('Hola '. $nombre . ' como estas  ');
      // //para usar unca variable dentro de una cadena necesitamos que toda la cadena este entre doble comilla
      // echo("Hola $nombre como estas \n");

// caso : imprimir estructuras complejas dentro de la cadena
      //arrays asociativos
         // $courses = [
         //    'backend' => [
         //       'PHP','LARAVEL'
         //    ]
         //    ];

         // cuando una estructura es compleja necesitamos llaves.
         //echo  "{$courses['backend'][0]}" ;

      //Objetos

         // class User{

         //    public $name = 'kevinooo';
         // }
         // $user = new User;

         //    echo("$user->name quiere aprender {$courses['backend'][0]}");
      
// caso : variables variables
            $nombre ="kevin";
            $kevin = "Rua Sulca";

            echo(" yo soy $nombre ${$nombre} ");
         // en funciones
         function getName(){
            return "kevin";

         }
         echo "YO ME LLAMO , $nombre ${getName()} ";


        