<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    

    <?php
        print("<table border='1>");

        for ($i = 1; $i <= 10; $i++) {
            // Encabezado de cada tabla
            print("<tr><th colspan='2'>Tabla del $i</th></tr>");
            
            for ($j = 1; $j <= 10; $j++) {
                print("<tr>");
                print("<td>$i x $j</td>");
                print("<td>" . ($i * $j) . "</td>");
                print("</tr>");
            }
        }

        print("</table>");
    ?>
</body>
</html>