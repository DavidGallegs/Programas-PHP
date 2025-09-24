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
        $mascara = substr($ip,$mascara+1);

        //Dirección red


    




        // FINAL
        print("IP: ".$ip."<br>");
        print("Máscara: ".$mascara);
    ?>
</body>
</html>