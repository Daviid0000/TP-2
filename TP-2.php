<?php

$user = "Valeria";

$pass = 1234;

$account = 100;

$respuesta1 = readline("Ingresa tu nombre de usuario:");
$respuesta2 = readline("Ingresa tu pin de usuario:");

echo "------------------------------- \n";
$validation1 = $respuesta1 === $user;
$validation2 = $respuesta2 == $pass;

if($validation2 && $validation1){
    echo "Dinero en la cuenta: $$account \n";
        echo "--------------------------------------------------------------------------------- \n";
        $deposito = readline("Si desea depositar dinero presione 1. Si desea extraer dinero presione 2: \n");
        echo "--------------------------------------------------------------------------------- \n";
    
        switch ($deposito) {
            case 1:
                echo "--------------------------------------------------------------------------------- \n";
                $dineroDepositado = readline("Ingrese la cantidad de dinero que desea depositar: \n");
                echo "--------------------------------------------------------------------------------- \n";
                $account = $account + $dineroDepositado;
    
                echo "Su saldo actual es $$account \n";
                echo "FIN DE LA OPERACIÓN \n";
                break;
            
            case 2:
                echo "--------------------------------------------------------------------------------- \n";
                $dineroExtraido = readline("Ingrese la cantidad de dinero que desea extraer: \n");
                echo "--------------------------------------------------------------------------------- \n";
                $account = $account - $dineroExtraido;
                echo "Su saldo actual es $$account \n";

            default:
                echo "FIN DE LA OPERACIÓN \n";
                break;
        }
}else{
    echo"PIN INCORRECTO";
}

?>