<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

    <?php
    
        $num = "5";
        $factorial="1";

        for ($i= $num; $i >0; $i--) { 
            
            $factorial *= $i;
        }

        echo("El factorial de ".$num." es: ".$factorial)
    ?>
    
</body>
</html>