<?php

    $num1 = $_POST["operador1"];
    $num2 = $_POST["operador2"];
    $option = $_POST["seleccionar"];
    $resultado;

    switch ($option) {
        case 'sumar':
                $resultado = $num1 + $num2;
                print("Resultado de la operación: ". $num1 . "+" . $num2 . "= " . $resultado);
            break;

        case 'resta':
                $resultado = $num1 - $num2;
                print("Resultado de la operación: ". $num1 . "-" . $num2 . "= " . $resultado);
            break;
        
        case 'producto':
                $resultado = $num1 * $num2;
                print("Resultado de la operación: ". $num1 . "*" . $num2 . "= " . $resultado);
            break;
        
        case 'division':
                $resultado = $num1 / $num2;
                print("Resultado de la operación: ". $num1 . "/" . $num2 . "= " . $resultado);
            break;
        
        default:
            echo("No ha seleccionado nada");
            break;
    }

    

?>