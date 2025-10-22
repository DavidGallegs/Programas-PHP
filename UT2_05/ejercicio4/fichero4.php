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


            // Dario##Lopez##Quishpe##11-01-2005##Valencia

            $nombre     = trim(substr($linea, 0, strpos($linea,"##")));  //Dario
            $apellido1  = trim(substr($linea, strpos($linea,"##")+2, strpos($linea,"##"))); //Lopez


            $apellido2  = trim(substr($linea, 0)); // Dario##Lopez##Quishpe##11-01-2005##Valencia
            $fecha_nac  = trim(substr($linea, 0)); // Dario##Lopez##Quishpe##11-01-2005##Valencia
            $localidad  = trim(substr($linea, 0)); // Dario##Lopez##Quishpe##11-01-2005##Valencia

            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$apellido1</td>";
            echo "<td>$apellido2</td>";
            echo "<td>$fecha_nac</td>";
            echo "<td>$localidad</td>";
            echo "</tr>";

        }

        fclose($fichero);
        echo "</table>";
    ?>
    
</body>
</html>