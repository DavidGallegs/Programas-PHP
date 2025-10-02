<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 4A</title>
</head>
<body>

    <?php

        $almacen=[];
        $almacenBinario=[];


        for ($i=0; $i <= 20; $i++) { 
            $almacen[$i] = $i;
        }
        
        foreach ($almacen as $indice => $x) {

            $binario = decbin($x);
            $almacenBinario[$indice] = $binario;
        }

        rsort($almacenBinario);

        echo "<table border='1'cellspacing='0'>";
        echo "<tr><th>Binario</th></tr>";
        
        foreach ($almacenBinario as $indice => $x) {

        //Crear fila
        echo "<tr>";
        echo "<td>$x</td>";
        echo "</tr>";
    }

        echo "</table>"


    ?>
    
</body>
</html>