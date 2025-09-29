<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
<?php

    for ($i=1 ; $i <= 10; $i++) { 
        
        print("---- Tabla del ".$i." ----<br>");
        for ($j=1; $j <= 10 ; $j++) { 
            
            print($i."x".$j." = ".($i*$j)."<br>");
        }

    }

?>
</body>
</html>