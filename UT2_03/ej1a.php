<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1A</title>
</head>
<body>

    <?php

    $almacen = array();
    $num = 1;
    $contador = 0;
    $contRepeticiones = 0;


    while ($contador < 21){

        // Casos 1 y 3
        if (($num == 1) || ($num == 3)){

            $almacen[$contador] = $num;
            $num++;
            $contador++;
        }
        // Caso con n = 2
        else if ($num == 2){

            $num++;
        }
        //Resto de casos
        else{

            for ($i= $num; $i > 0 ; $i--) { 
                
                if ($num % $i == 0){

                    $contRepeticiones++;

                }
            }

            if ($contRepeticiones > 2){
                $contRepeticiones = 0;
                $num++;
            }
            else{
                $almacen[$contador] = $num;
                $num++;
                $contador++;
                $contRepeticiones = 0;
            }

        }
        
    }


    echo "<table border='1'cellspacing='0'>";
    echo "<tr><th>Índice</th><th>Valor</th><th>Suma</th></tr>";

    $suma = 0; // inicializar acumulador

    foreach ($almacen as $indice => $x) {
        $suma += $x; // acumulamos
        echo "<tr>";
        echo "<td>$indice</td>";// índice
        echo "<td>$x</td>";// valor
        echo "<td>$suma</td>";// suma 
        echo "</tr>";
    }

    echo "</table>";


    
    ?>
    
</body>
</html>