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

        $part1 = str_pad(decbin($part1),8,"0",STR_PAD_LEFT);
        $part2 = str_pad(decbin($part2),8,"0",STR_PAD_LEFT);
        $part3 = str_pad(decbin($part3),8,"0",STR_PAD_LEFT);
        $part4 = str_pad(decbin($part4),8,"0",STR_PAD_LEFT);

        print("IP:". $ip . " en binario es: ". $part1.".". $part2."." . $part3."." . $part4);   
        
    ?>
</body>
</html>