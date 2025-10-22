<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero 1</title>
</head>
<body>

    <form method="post" action="fichero1.php">
        <label>Nombre: <input type="text" name="nombre" required></label><br>
        <label>Apellido1: <input type="text" name="apellido1" required></label><br>
        <label>Apellido2: <input type="text" name="apellido2" required></label><br>
        <label>Fecha Nacimiento: <input type="text" name="fecha_nac" required></label><br>
        <label>Localidad: <input type="text" name="localidad" required></label><br>
        <input type="submit" value="Guardar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nombre = $_POST['nombre'];
            $apellido1 = $_POST['apellido1'];
            $apellido2 = $_POST['apellido2'];
            $fecha_nac = $_POST['fecha_nac'];
            $localidad = $_POST['localidad'];

            //El str_pad indica el número de caractéres que ocupa cada campo
            $linea  = str_pad($nombre, 40);
            $linea .= str_pad($apellido1, 41);
            $linea .= str_pad($apellido2, 42);
            $linea .= str_pad($fecha_nac, 10); //Queda pegado en alumnos.txt
            $linea .= str_pad($localidad, 27);
            $linea .= "\n"; // salto de línea


            //La ruta donde esta el archivo alumnos.txt  (Cambiar al subir al www)
            $ruta = "C:/Users/Diego/OneDrive/Documentos/2 GRADO SUPERIOR/DWES/programas php/UT2_05/ejercicio1/alumnos.txt";

            //La viarable $f adopta la ruta y "a" (para enviar los datos)
            $fichero = fopen($ruta, "a");

            //Con este método escribimos en la ruta $fichero el contenido de $linea
            fwrite($fichero, $linea);

            //Cerramos el fichero
            fclose($fichero);

            echo "Archivos enviados";
        }
        
    ?>          

    
    
</body>
</html>