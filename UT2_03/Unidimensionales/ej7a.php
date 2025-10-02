<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7A</title>
</head>
<body>

    <?php

        $alumnos = [
            "Ana" => 20,
            "Luis" => 22,
            "Marta" => 19,
            "Carlos" => 21,
            "Elena" => 23,
            "Jose" => 32,
            "Diego" => 18,
        ];


        //A.Mostrar array
        foreach($alumnos as $nombre => $edad){
        echo "Alumno: ".$nombre. ", Edad ". $edad."<br>";
        }

        //B. SITUAR PUNTERO SEGUNDA POSICIÓN + VISUALIZAR
        next($alumnos);
        echo(key($alumnos) . "<br>"); // Luis

        //C. AVANZAR UNA POSICIÓN + VISUALIZAR
        next($alumnos);
        echo(key($alumnos) . "<br>"); // Marta

        //D. COLOCAR PUNTERO ÚLTIMA + VISUALIZAR
        end($alumnos);
        echo(key($alumnos) . "<br>"); //Diego

        //E. ORDENAAR DE MENOR A MAYOR EDAD + VISUALIZAR PRIMERO Y ÚLTIMO
        asort($alumnos);
        reset($alumnos);

        current($alumnos);
        echo("El primer alumno es:" . key($alumnos) . "<br>"); //Diego (18)

        end($alumnos);
        echo("El último alumno es:" . key($alumnos) . "<br>"); //Jose (32)

    ?>
    
</body>
</html>