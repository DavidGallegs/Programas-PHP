<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $num = "40";
        $binario = "";


        while ($num > 0) { //$num = 40
            $resto = $num % 2; //0, 0, 0, 1, 0, 1

            $binario = $resto . $binario; //"0", "00", "000", "100", "0100", "10100"

            $num = (int)($num / 2); //20, 10, 5, 2, 1, 0,5 = 0 >> 0 !> 0 >> Fin bucle
        }

        echo "El número en binario es: " . $binario;
    ?>
</body>
</html>