<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>

        <h1>CAMBIO DE BASE</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

            <label>
                Número:
                <input type="text" required name="numero"> <br>
            </label>

            <label>
                Nueva Base:
                <input type="number" name="base" required>
            </label>
            <br>

            <label class="label_inline">
                <input type="submit" value="Enviar">
            </label>

            <label class="label_inline">
                <input type="reset" value="Borrar">
            </label>
        </form>

    </div>

    <?php

        $num = $base = $numPost = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numPost = $_POST["numero"];
            $base = $_POST["base"];

        }


        if (strpos($numPost, "/") !== false) {
            $posBarra = strpos($numPost, "/");

            $numOg = substr($numPost, 0, $posBarra);

            $baseOg = substr($numPost, $posBarra + 1);

            $num = calcularBase($numOg, $baseOg, "");
        } else {
            $num = $numPost;
        }



        function calcularBase($num,$base,$numF) {

            $listaHexa = [10=>"A", 11=>"B", 12=>"C", 13=>"D", 14=>"E", 15=>"F"];
            while ($num > 0) { 
                $resto = $num % $base; 

                
                
                if ($base == 16 && $resto > 9) {
                    $resto = $listaHexa[$resto];
                }

                $numF = $resto . $numF; 
                $num = (int)($num / $base); 



            }
            return $numF;
        }

        $numF = calcularBase($num,$base,"");

        print("$num en base 10 = $numF en base $base");



    ?>
    
</body>
</html>


