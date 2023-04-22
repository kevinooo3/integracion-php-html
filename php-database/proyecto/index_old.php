<?php
use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawalTypeEnum;
require("vendor/autoload.php");// para generar nuestra carpeta vendor utilizamos el comando : scomposer du
/* //ESTE METODO ES CON mySQLI
    $incomes_controller = new IncomesController;
    $incomes_controller->store([
        "payment_method" => PaymentMethodEnum::BankAccount->value,
        "type" => IncomeTypeEnum::Salary->value,
        "date" => date("Y-m-d H:i:s"),
        "amount" => 1000000,
        "description" => "Pago de mi salario por mi arduo y muy buen trabajo"
    ]);
*/

// ESTE METODO ES CON PDO
    /*
        $withdrawal_controller = new WithdrawalsController();
        // aqui usamos placeholders por withdrawallsController.php tambien tiene placeholder
        $withdrawal_controller->store([
            "payment_method" => PaymentMethodEnum::CreditCard->value,
            "type" => WithdrawalTypeEnum::Purchase->value,
            "date" => date("Y-m-d H:i:s"),
            "amount" => 69,
            "description" => "Compré mucha grifa para los michis."
        ]);
    */

    // METODO FETCH PARA CONSULTAS EN LA BASE DE DATOS
    /*
        $withdrawal_controller = new WithdrawalsController();
        $withdrawal_controller->index();
        */

    // OBTENER SOLO UN ELEMENTO DE LA CONSULTA
        /*
        $withdrawal_controller = new WithdrawalsController();
        $withdrawal_controller->show(1);
        */
    // DESTROY
        
         $withdrawal_controller = new WithdrawalsController();
         $withdrawal_controller->destroy(1);
       
