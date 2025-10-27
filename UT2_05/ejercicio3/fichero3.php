<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero 3</title>
</head>
<body>

    <?php

        $ruta = "../ejercicio1/alumnos.txt";

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

            $nombre     = trim(substr($linea, 0, 40));  
            $apellido1  = trim(substr($linea, 40, 41));    
            $apellido2  = trim(substr($linea, 81, 42));   
            $fecha_nac  = trim(substr($linea, 123, 10));   
            $localidad  = trim(substr($linea, 133, 27));  

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