<?php

$num = $_POST["numero"];
$base = $_POST["option"];
$numF = "";

    

    
    switch ($base) {
        case 'binario':
            $numF = calcularBase($num,2,"");
            print("El número $num en binario es $numF");
            break;

        case 'octal':
            $numF = calcularBase($num,8,"");
            print("El número $num en octal es $numF");
            break;

        case 'hexadecimal':
            $numF = calcularBase($num,16,"");
            print("El número $num en hexadecimal es $numF");
            break;

        case 'all':
            $bin = calcularBase($num,2,"");
            $octal = calcularBase($num,8,"");
            $hexa = calcularBase($num,16,"");

            print("<table border='1px'>");
                print("<tr>");
                    print("<td> Binario </td>");
                    print("<td> $bin </td>");
                print("</tr>");

                print("<tr>");
                    print("<td> Ocatl </td>");
                    print("<td> $octal </td>");
                print("</tr>");

                print("<tr>");
                    print("<td> Hexadecimal </td>");
                    print("<td> $hexa </td>");
                print("</tr>");
            print("</table>");
            break;
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
    
?>