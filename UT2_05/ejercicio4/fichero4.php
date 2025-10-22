<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero 3</title>
</head>
<body>

    <?php

        $ruta = "C:/Users/Diego/OneDrive/Documentos/2 GRADO SUPERIOR/DWES/programas php/UT2_05/ejercicio2/alumnos2.txt";

        $fichero = fopen($ruta,"r"); //'r' para extraer los datos del fichero


        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido 1</th>";
        echo "<th>Apellido 2</th>";
        echo "<th>Fecha Nacimiento</th>";
        echo "<th>Localidad</th>";  
        echo "</tr>"; 

        //Siempre va a ir eligiendo linea por linea, hasta que detecte que no hay más lineas
        while (($linea = fgets($fichero)) !== false) { 

            $datos = explode("##", $linea);


            echo "<tr>";
            echo "<td>$datos[0]</td>";
            echo "<td>$datos[1]</td>";
            echo "<td>$datos[2]</td>";
            echo "<td>$datos[3]</td>";
            echo "<td>$datos[4]</td>";
            echo "</tr>";

        }

        fclose($fichero);
        echo "</table>";
    ?>
    
</body>
</html>