<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 3A</title>
</head>
<body>

    <?php

        $almacen=[];


        for ($i=0; $i <= 20; $i++) { 
            $almacen[$i] = $i;
        }



        echo "<table border='1'cellspacing='0'>";
        echo "<tr><th>Índice</th><th>Binario</th><th>Octal</th></tr>";
        
        foreach ($almacen as $indice => $x) {
        // Calcular binario
        $binario = decbin($x);

        // Calcular octal
        $octal = decoct($x);

        //Crear fila
        echo "<tr>";
        echo "<td>$indice</td>";// índice
        echo "<td>$binario</td>";// valor
        echo "<td>$octal</td>";// suma 
        echo "</tr>";
    }

        echo "</table>"
    ?>
    
</body>
</html>