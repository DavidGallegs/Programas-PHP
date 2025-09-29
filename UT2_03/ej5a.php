<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5A</title>
</head>
<body>

    <?php
        $array1 = array("Base de Datos","Entornos Desarrollo","Programación");
        $array2 = ["Sistemas Informáticos","FOL","Mecanizado"];
        $array3 = [
            "Desarrollo Web ES",
            "Desarrollo WEB EC",
            "Despliegue",
            "Desarrollo de Interfaces",
            "Inglés"
        ];


        //Forma 1 (Sin funciones)
        $contador = 0;
        $arrayFusion1= [];

        for ($i=0; $i < count($array1); $i++) { 
            $arrayFusion1[$contador] = $array1[$i];
            $contador++;
        }

        for ($i=0; $i < count($array2); $i++) { 
            $arrayFusion1[$contador] = $array2[$i];
            $contador++;
        }

        for ($i=0; $i < count($array3); $i++) { 
            $arrayFusion1[$contador] = $array3[$i];
            $contador++;
        }


        echo "<h1> FORMA 1 </h1>";
        foreach ($arrayFusion1 as $x) {
            echo $x . "<br>";
        }
        echo "<br>";


        //Forma 2 (Array_merge)
        $arrayFusion2 = array_merge($array1,$array2,$array3);

        echo "<h1> FORMA 2 </h1>";
        foreach ($arrayFusion2 as $x) {
            echo $x . "<br>";
        }
        echo "<br>";

        
        //Forma 3 (Array_push)
        $arrayFusion3 =[];
        for ($i=0; $i < count($array1); $i++) { 
            array_push($arrayFusion3,$array1[$i]);
        }
        for ($i=0; $i < count($array2); $i++) { 
            array_push($arrayFusion3,$array2[$i]);
        }
        for ($i=0; $i < count($array3); $i++) { 
            array_push($arrayFusion3,$array3[$i]);
        }

        echo "<h1> FORMA 3 </h1>";
        foreach ($arrayFusion2 as $x) {
            echo $x . "<br>";
        }
        echo "<br>";




    ?>
    
</body>
</html>