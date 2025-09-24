<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej1-Conversión IP decimal a Binario </title>
</head>
<body>

    <?php
        $ip="192.18.16.204";

        $byte1 = strpos($ip,"."); //3
        $byte2 = strpos($ip,".",$byte1 + 1); //6
        $byte3 = strpos($ip,".",$byte2 + 1); //9

        $part1 =   substr($ip,0, $byte1); //192
        $part2 =   substr($ip,$byte1+1, $byte2-($byte1+1)); //18
        $part3 =   substr($ip,$byte2+1, $byte3-($byte2+1)); //16
        $part4 =   substr($ip,$byte3+1); //204


        printf("IP: %s en binario es %08b.%08b.%08b.%08b",$ip,$part1,$part2,$part3,$part4);
        echo "<br>";
        $mostrar = sprintf("IP: %s en binario es %08b.%08b.%08b.%08b",$ip,$part1,$part2,$part3,$part4);
        print($mostrar);
        
    ?>
    
</body>
</html>