<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2A</title>
</head>
<body>

    <?php

        $almacen = [];
        $num = 1;
        $contador1 = 0;
        $contador2 = 0;

        $mediaPar = 0;
        $mediaImpar = 0;

        while ($contador1 < 20){

            if ($num % 2 == 0){

                $num++;
            }
            else{
                $almacen[$contador1] = $num;
                $num++;
                $contador1++;
            }
            
        }


        foreach ($almacen as $x) {

            if ($contador2 % 2 == 0){

                $mediaPar += $x;
                $contador2++;
            }
            else{

                $mediaImpar += $x;
                $contador2++;
            }
        }

        $mediaPar = $mediaPar/(count($almacen)/2);
        $mediaImpar = $mediaImpar/(count($almacen)/2);
        
        echo "La media par es: ". $mediaPar . "<br>";
        echo "La media impar es: ". $mediaImpar . "<br>";

        
        
    ?>
    
</body>
</html>