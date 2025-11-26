<?php 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {

    $jugador1 = $_POST['nombre1'];
    $jugador2 = $_POST['nombre2'];
    $jugador3 =$_POST['nombre3'];
    $jugador4 = $_POST['nombre4'];

}

/*
Para ver si funcionan las imagenes
echo "<h3>Prueba de imagen</h3>";
echo "<img src='images/1C1.PNG' width='100'>";*/

function crearJugadores(){

if (isset($_POST['submit'])) {

    $jugador1 = $_POST['nombre1'];
    $jugador2 = $_POST['nombre2'];
    $jugador3 =$_POST['nombre3'];
    $jugador4 = $_POST['nombre4'];
    }

    $jugadores = [$jugador1 => [],$jugador2 => [],$jugador3 => [],$jugador4 => []];

    return $jugadores;

} //end function crearJugadores

function crearBaraja($jugadores){

    

    $valoresCartas = [
        // Ases (A=14)
        '1C1' => 14, '1C2' => 14, '1D' => 14, '1D2' => 14, '1P1' => 14, '1P2' => 14, '1T1' => 14, '1T2' => 14,
        // Jotas (J=11)
        'JC1' => 11, 'JC2' => 11, 'JD1' => 11, 'JD2' => 11, 'JP1' => 11, 'JP2' => 11, 'JT1' => 11, 'JT2' => 11,
        // Reinas (Q=12)
        'QC1' => 12, 'QC2' => 12, 'QD1' => 12, 'QD2' => 12, 'QP1' => 12, 'QP2' => 12, 'QT1' => 12, 'QT2' => 12,
        // Reyes (K=13)
        'KC1' => 13, 'KC2' => 13, 'KD1' => 13, 'KD2' => 13, 'KP1' => 13, 'KP2' => 13, 'KT1' => 13, 'KT2' => 13
    ];

    


    $mazoCartas = array_keys($valoresCartas);
    shuffle($mazoCartas);

    $cartasPorjugador = 4;

    if (!is_array($jugadores) || empty($jugadores)) {
        echo "Error: No hay jugadores válidos.";
        return [];
}

 // Repartir cartas a los jugadores
    foreach ($jugadores as $x => $y) {
        $jugadores[$x] = []; // Inicializar el array de cartas
        
        // Repartir el número de cartas especificado
        for ($i = 0; $i < $cartasPorjugador && !empty($mazoCartas); $i++) {
            $carta = array_shift($mazoCartas); // Toma la primera carta del mazo
            $jugadores[$x][$carta] = $valoresCartas[$carta]; // Asignar la carta y su valor
        }
    }

    return $jugadores;
}


function repartirCartas_Y_resultadoRonda($jugadores){

    $premio = $_POST['bote'];

    if (!is_array($jugadores) || empty($jugadores)) {
        echo "Error: No hay jugadores válidos.";
        return [];
    }
    

    $cartasImagen = [ '1C1' => 'images/1C1.PNG', '1C2' => 'images/1C2.PNG', '1D' => 'images/1D.PNG', 
    '1D2' => 'images/1D2.PNG', '1P1' => 'images/1P1.PNG', '1P2' => 'images/1P2.PNG',
    '1T1' => 'images/1T1.PNG', '1T2' => 'images/1T2.PNG', 'JC1' => 'images/JC1.PNG', 'JC2' => 'images/JC2.PNG',
    'JD1' => 'images/JD1.PNG', 'JD2' => 'images/JD2.PNG', 'JP1' => 'images/JP1.PNG', 'JP2' => 'images/JP2.PNG',
    'JT1' => 'images/JT1.PNG', 'JT2' => 'images/JT2.PNG','KC1' => 'images/KC1.PNG', 'KC2' => 'images/KC2.PNG',
    'KD1' => 'images/KD1.PNG', 'KD2' => 'images/KD2.PNG', 'KP1' => 'images/KP1.PNG', 'KP2' => 'images/KP2.PNG',
    'KT1' => 'images/KT1.PNG', 'KT2' => 'images/KT2.PNG', 'QC1' => 'images/QC1.PNG', 'QC2' => 'images/QC2.PNG',
    'QD1' => 'images/QD1.PNG', 'QD2' => 'images/QD2.PNG', 'QP1' => 'images/QP1.PNG', 'QP2' => 'images/QP2.PNG',
    'QT1' => 'images/QT1.PNG', 'QT2' => 'images/QT2.PNG'];

    foreach ($jugadores as $nombre => $cartas){
        
        echo "<p>Cartas de $nombre:</p>";
        $poker = false;
        $pareja = false;
        $trio = false;
        $doblePareja = false;

        $htmlCartas= '' ;

        foreach ($cartas as $x => $y) {

            if(isset($cartasImagen[$x])){
                $htmlCartas .= "<img src='" . $cartasImagen[$x] . "' width='100'> ";
        } else {
            echo "Imagen no encontrada para la carta: " . $x;
            }
        }

        echo "<p> $htmlCartas</p>";
        
        // === Calcular valores de las cartas (para este jugador) ===

        $conteo = array_count_values($cartas); // cuenta repeticiones de las cartas dentro de array
        $valores = array_values($conteo);

        //Detectamos la jugada

        if(in_array(4, $valores)){
            $poker = true;

        } elseif(in_array(3, $valores)){
            $trio = true;

        } elseif (count(array_keys($conteo, 2)) == 2) {
            $doblePareja = true;
        
        } elseif(in_array(2, $valores)){
            $pareja = true;
        }        


    } //end foreach

     //Mostramos cuanto dinero se reparte segun las manos conseguidas

    if ($poker == true) {
        echo "<p>" . $nombre . " gana el bote de Póker de " . $premio . " euros!</p>";
    } elseif ($trio == true){
        $premioJugador = $premio * 0.70;
        echo "<p>" . $nombre . " gana el bote de Trío de " . $premioJugador . " euros!</p>";

    } elseif ($doblePareja == true){
        //variable temporal
        $premioJugador = $premio * 0.50;
        echo "<p>" . $nombre . " gana el bote de Doble Pareja de " . $premioJugador . " euros!</p>";

    } else if ($pareja == true){
        echo "<p>" . $nombre . " gana el bote de Pareja. El bote acumulado es de " . $premio . " euros.</p>";
    } else{
        echo "<p>No hay ganadores en esta ronda. El bote acumulado es de " . $premio . " euros.</p>";
    }

    return $jugadores;

}

?>


