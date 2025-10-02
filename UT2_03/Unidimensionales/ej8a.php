<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8A</title>
</head>
<body>

    <?php
        $alumnos = [
            "Ana" => 4,
            "Luis" => 4,
            "Marta" => 5,
            "Carlos" => 7,
            "Elena" => 2,
            "Jose" => 9,
            "Diego" => 4,
        ];

        //A. MOSTRAR EL ALUMNO CON MAYOR NOTA
        $mayorNota;
        $anterior = 0;

        foreach ($alumnos as $nombre => $x) {


            if ($x > $anterior){

                $mayorNota = $nombre;
                $anterior = $x;
            }
        }

        echo("El alumno con mayor nota es ". $mayorNota . "<br>");


        //B. MOSTRAR EL ALUMNO CON MENOR NOTA
        $menorNota;
        $anterior = 10;
        foreach ($alumnos as $nombre => $x) {


            if (!($x > $anterior)){

                $menorNota = $nombre;
                $anterior = $x;
            }
        }

        echo("El alumno con menor nota es ". $menorNota . "<br>");


        //C. MEDIA DE LA CLASE
        $mediaClase = 0;
        $totalAlumnos = 0;

        foreach ($alumnos as $nombre => $x) {


            $mediaClase += $x;
            $totalAlumnos++;
        }

        echo("La media de la clase es: ". ($mediaClase/$totalAlumnos) . "<br>")

    ?>


    
</body>
</html>