<?php
    namespace App\Controllers;

    use Database\MySQLi\Connection;

    class IncomesController {

        /**
         * Muestra una lista de este recurso
         */
        public function index() {}

        /**
         * Muestra un formulario para crear un nuevo recurso
         */
        public function create() {}

        /**
         * Guarda un nuevo recurso en la base de datos
         */
        public function store($data) {
            $connection =Connection::getInstance()->get_database_instance();

            // con este metodo exponemos a sqlinjection
            /* este era el metodo sin seguridad :$connection->query("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES (
                {$data['payment_method']},
                {$data['type']},
                '{$data['date']}',
                {$data['amount']},
                '{$data['description']}'

            );");
            */

            // ***** ESTE METODO DE INSERCION AYUDA A EVITAR HACKEOS O SQLINJECTION ***************
            $stmt = $connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES (?,?,?,?,?);");
            $stmt->bind_param("iisds",$payment_method, $type, $date, $amount, $description);
            // en bind_param('tiposdatos','datos')
            // es decir la i de int la s de string la d de double, es decir iisds hace referencia a los tipos de datos que ingresaremos

            $payment_method = $data['payment_method'];
            $type = $data['type'];
            $date = $data['date'];
            $amount = $data['amount'];
            $description = $data['description'];
            
            $stmt->execute();
            echo "Se ha insertado {$stmt->affected_rows} filas en las base de datos";
        }
        /**
         * Muestra un único recurso especificado
         */
        public function show() {}

        /**
         * Muestra el formulario para editar un recurso
         */
        public function edit() {}

        /**
         * Actualiza un recurso específico en la base de datos
         */
        public function update() {}

        /**
         * Elimina un recurso específico de la base de datos
         */
        public function destroy() {} 
    }
    

