<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <?php

        $num = "48";
        $numF = "";
        $base = "2"; 
        $numC = $num;
        $hexa1=0;
        $hexa2=0;

        while ($num > 0) { 
            $resto = $num % $base; 

            $numF = $resto . $numF; 

            $num = (int)($num / $base); 

        }

        //Crear el binario
        echo "El número ". $numC ." en binario es: " . $numF = str_pad($numF,8,"0",STR_PAD_LEFT)."<br>";

        //Separar el binario en cuartetos
        
        

        for ($i=0; $i <2; $i++) { 
            
            if ($i == 0){
                $cuarteto = substr($numF,0,4);
            }
            else{
                $cuarteto = substr($numF,4,strlen($numF));
            }   


            switch ($cuarteto) {
                case '0000':
                        if($i == 0){
                            $hexa1 = 0;
                        }
                        if ($i == 1){
                            $hexa2 = 0;
                        }
                    break;
                
                case '0001':
                        if($i == 0){
                            $hexa1 = 1;
                        }
                        if ($i == 1){
                            $hexa2 = 1;
                        }
                    break;
                
                case '0010':
                        if($i == 0){
                            $hexa1 = 2;
                        }
                        if ($i == 1){
                            $hexa2 = 2;
                        }
                    break;

                case '0011':
                        if($i == 0){
                            $hexa1 = 3;
                        }
                        if ($i == 1){
                            $hexa2 = 3;
                        }
                    break;

                case '0100':
                        if($i == 0){
                            $hexa1 = 4;
                        }
                        if ($i == 1){
                            $hexa2 = 4;
                        }
                    break;
                
                case '0101':
                        if($i == 0){
                            $hexa1 = 5;
                        }
                        if ($i == 1){
                            $hexa2 = 5;
                        }
                    break;
                        
                case '0110':
                        if($i == 0){
                            $hexa1 = 6;
                        }
                        if ($i == 1){
                            $hexa2 = 6;
                        }
                    break;

                case '0111':
                        if($i == 0){
                            $hexa1 = 7;
                        }
                        if ($i == 1){
                            $hexa2 = 7;
                        }
                    break;
                
                case '1000':
                        if($i == 0){
                            $hexa1 = 8;
                        }
                        if ($i == 1){
                            $hexa2 = 8;
                        }
                    break;
                        
                case '1001':
                        if($i == 0){
                            $hexa1 = 9;
                        }
                        if ($i == 1){
                            $hexa2 = 9;
                        }
                    break;
                
                case '1010':
                        if($i == 0){
                            $hexa1 = "A";
                        }
                        if ($i == 1){
                            $hexa2 = "A";
                        }
                    break;
                
                case '1011':
                        if($i == 0){
                            $hexa1 = "B";
                        }
                        if ($i == 1){
                            $hexa2 = "B";
                        }
                    break;
                        
                case '1100':
                        if($i == 0){
                            $hexa1 = "C";
                        }
                        if ($i == 1){
                            $hexa2 = "C";
                        }
                    break;
                
                case '1101':
                        if($i == 0){
                            $hexa1 = "D";
                        }
                        if ($i == 1){
                            $hexa2 = "D";
                        }
                    break;
                
                case '1110':
                        if($i == 0){
                            $hexa1 = "E";
                        }
                        if ($i == 1){
                            $hexa2 = "E";
                        }
                    break;
                        
                case '1111':
                        if($i == 0){
                            $hexa1 = "F";
                        }
                        if ($i == 1){
                            $hexa2 = "F";
                        }

                    break;
                
            }
                if ($i==1){
                    echo ($hexa1.$hexa2);
                }
                
        }
    
    ?>
    
</body>
</html>