<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $ip="192.168.16.100/16";

        //Máscara
        $mascara = strpos($ip,"/");
        $mascaraFinal = substr($ip,$mascara+1);

        //Dirección IP
        $byte1 = strpos($ip,"."); //3
        $byte2 = strpos($ip,".",$byte1 + 1); //6
        $byte3 = strpos($ip,".",$byte2 + 1); //9
        $byte4 = $mascara;

        $part1 =   substr($ip,0, $byte1); //192
        $part2 =   substr($ip,$byte1+1, $byte2-($byte1+1)); //18
        $part3 =   substr($ip,$byte2+1, $byte3-($byte2+1)); //16
        $part4 =   substr($ip,$byte3+1, $byte4-($byte3+1)); //204

        $part1_oct = str_pad(decbin($part1),8,"0",STR_PAD_LEFT); //octeto1
        $part2_oct = str_pad(decbin($part2),8,"0",STR_PAD_LEFT); //octeto2
        $part3_oct = str_pad(decbin($part3),8,"0",STR_PAD_LEFT); //octeto3
        $part4_oct = str_pad(decbin($part4),8,"0",STR_PAD_LEFT); //octeto4


        $part3_d = $part3*0;
        $part4_d = $part4*0;

        //Dirección de broadcast
        $part3_broadcast = str_replace("0","255",$part3_d);
        $part4_broadcast = str_replace("0","255",$part4_d);

        //Rangos
        $part4_d_rang = str_replace("0","1",$part4_d);
        $part4_broadcast_rang = str_replace("0","254",$part4_d);


        // FINAL
        print("IP: ".$ip."<br>");
        print("Máscara: ".$mascaraFinal."<br>");
        print("Dirección Red: ".$part1.".".$part2.".".$part3_d.".".$part4_d."<br>");
        print("Dirección de Broadcast: ".$part1.".".$part2.".".$part3_broadcast.".".$part4_broadcast."<br>");
        print("Rangos: ".$part1.".".$part2.".".$part3_d.".".$part4_d_rang." a ".$part1.".".$part2.".".$part3_broadcast.".".$part4_broadcast_rang);
    ?>
</body>
</html>