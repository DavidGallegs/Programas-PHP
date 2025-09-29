<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $num = "48";
        $numF = "";
        $base = "2"; 
        $numC = $num;

    for ($i= 2; $i <= 9; $i++) { 

        while ($num > 0) { 
            $resto = $num % $base; 

            $numF = $resto . $numF; 

            $num = (int)($num / $base); 

        }

        switch ($base) {
            case 2:
                echo "El número ". $numC ." en binario es: " . $numF = str_pad($numF,8,"0",STR_PAD_LEFT)."<br>";
                break;

            case 3:
                echo "El número ". $numC ." en base 3 es: " . $numF."<br>";
                break;

            case 4:
                echo "El número ". $numC ." en base 4 es: " . $numF."<br>";
                break;

            case 5:
                echo "El número ". $numC ." en base 5 es: " . $numF."<br>";
                break;

            case 6:
                echo "El número ". $numC ." en hexadecimal es: " . $numF."<br>";
                break;

            case 7:
                echo "El número ". $numC ." en base 7 es: " . $numF."<br>";
                break;

            case 8:
                echo "El número ". $numC ." en base 8 es: " . $numF."<br>";
                break;
            
            case 9:
                echo "El número ". $numC ." en base 9 es: " . $numF."<br>";
                break;
            
        }

        $num = "48";
        $numF ="";
        $base++;
        $numC = $num;
        
        


        
    }
        

        
        
    ?>
    
</body>
</html>