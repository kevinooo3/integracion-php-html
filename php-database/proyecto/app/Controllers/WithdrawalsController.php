<?php

namespace App\Controllers;
use Database\PDO\Connection;

class WithdrawalsController {

    private $connection;
    public function __construct(){
        $this->connection = Connection::getInstance()->get_database_instance();
    }



    /**
     * Muestra una lista de este recurso
     */
    public function index() {
        // ESTE METODO ES USANDO FETCH ALL
        /*
            $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
            $stmt->execute();
            $result = $stmt->fetchAll();
        //comprobamos que imprimer los datos como array: var_dump($result);
            foreach($result as $resultado){
                echo "Gastaste " . $resultado["amount"]. " USD en: " . $resultado["description"] . "\n";
            }
        */
        // ESTE METODO ES USANDO FETCH COLUMN
        /*
            $stmt = $this->connection->prepare("SELECT amount, description FROM withdrawals");
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);
            //comprobamos que imprimer los datos como array: var_dump($result);
            foreach($result as $resultado){
                echo "Gastaste . $resultado USD \n";
            }
        */

    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create() {}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data) {
        // este es el metodo raton , osea el metodo que propenso a ataques.
            /*$connection = Connection::getInstance()->get_database_instance();
            $affected_rows = $connection->exec("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (
                {$data['payment_method']},
                {$data['type']},
                '{$data['date']}',
                {$data['amount']},
                '{$data['description']}'
            )");
            echo "Se han insertado $affected_rows filas en la base de datos.";
            */
        // este es el metodo BINDPARAMS
            /*
            $connection = Connection::getInstance()->get_database_instance();
           // asi estab antes de AÑADIR EL CONSTRUCTOR: $stmt = $connection->prepare("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");
            // aqui usamos placeholders que son los dospuntos antes de la variable
            $stmt->bindParam(":payment_method", $data["payment_method"]);
            $stmt->bindParam(":type", $data["type"]);
            $stmt->bindParam(":date", $data["date"]);
            $stmt->bindParam(":amount", $data["amount"]);
            $stmt->bindParam(":description", $data["description"]);

            $stmt->execute();
            */
    

        // ESTE ES EL METODO BINDVALUE : no permite cambiar despues el valor por ejemplo:
            // $stmt->bindParam(":payment_method", $data["payment_method"]);
            // $data["description"] = "Compré cosas para mi";
            // manda ala bd compre cosas para mi

            // $stmt->bindValue(":payment_method", $data["payment_method"]);
            // $data["description"] = "Compré cosas para mi";
            // manda ala bd Compré mucha grifa para los michis. Es decir le llega lo que pongar despues el manda si o si lo del inicio.
            $connection = Connection::getInstance()->get_database_instance();
            $stmt = $this->connection->prepare("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");
            // aqui usamos placeholders que son los dospuntos antes de la variable
            $stmt->bindValue(":payment_method", $data["payment_method"]);
            $stmt->bindValue(":type", $data["type"]);
            $stmt->bindValue(":date", $data["date"]);
            $stmt->bindValue(":amount", $data["amount"]);
            $stmt->bindValue(":description", $data["description"]);
            
            $data["description"] = "Compré cosas para mi";
            $stmt->execute();
     }
    /**
     * Muestra un único recurso especificado
     */
    public function show($id) {
        /*
        $stmt = $this->connection->prepare("SELECT * FROM withdrawals WHERE id = :id");
        $stmt->execute([
            ":id" => $id
        ]);
        $result = $stmt->fetch();
        var_dump($result);
        
        echo "El registro con id $id dice que te gastaste {$result['amount']} USD en {$result['description']}";
        */
        //Uso del bindColumn
        $stmt = $this->connection->prepare("SELECT * FROM withdrawals WHERE id = :id");
        $stmt->execute([
            ":id" => $id
        ]);
        //------> asqui usamos el BINDCOLUMN : mas qu todo sirve para tener mejor lectura
        // el bind columns va despues del execute y antes del bindcolumn
        $stmt->bindColumn("amount",$montito);
        $stmt->bindColumn("description",$descripcioncita);
        $result = $stmt->fetch();
        //var_dump($result);
        
        echo "El registro con id $id dice que te gastaste $montito USD en $descripcioncita";
    }

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
    public function destroy($id) {
        $this->connection->beginTransaction();// esto hace que nuestro query este en el limbo a la espera de una confirmacion mediante commit o rechazo con rollback
        $stmt = $this->connection->prepare("DELETE FROM withdrawals WHERE id=:id");
        $stmt->execute([
            ":id" => $id
        ]);

        $sure = readline("¿De verdad quieres eliminar este registro? \n");
        if($sure == "no")
            $this->connection->rollBack(); // esto siginifica ahi nomas no lo hagas php
        else
            $this->connection->commit(); // esto significa dale con todo sin miedo al exito php
    }
    
}

/*
index - Display a listing of the resource.
create - Show the form for creating a new resource.
store - Store a newly created resource in storage.
show - Display the specified resource.
edit - Show the form for editing the specified resource.
update - Update the specified resource in storage.
destroy - Remove the specified resource from storage.
*/