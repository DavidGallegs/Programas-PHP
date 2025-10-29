<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function crearJugadores(){ 

    $jugador1 = test_input($_POST["nombre1"]);
    $jugador2 = test_input($_POST["nombre2"]);
    $jugador3 = test_input($_POST["nombre3"]);
    $jugador4 = test_input($_POST["nombre4"]);

    //Creo los jugadores
    $jugadores = array($jugador1 => [],$jugador2 => [],$jugador3 => [],$jugador4 => []);

    return $jugadores;
}


function repartirCartas($jugadores){

    $numCartas = (int)test_input($_POST["numcartas"]);  
    //Creo las cartas
    $baraja = [
    '1C' => 1,'2C' => 2,'3C' => 3,'4C' => 4,'5C' => 5,'6C' => 6,'7C' => 7,'JC' => 0.5,'QC' => 0.5,'KC' => 0.5,
    '1D' => 1,'2D' => 2,'3D' => 3,'4D' => 4,'5D' => 5,'6D' => 6,'7D' => 7,'JD' => 0.5,'QD' => 0.5,'KD' => 0.5,
    '1P' => 1,'2P' => 2,'3P' => 3,'4P' => 4,'5P' => 5,'6P' => 6,'7P' => 7,'JP' => 0.5,'QP' => 0.5,'KP' => 0.5,
    '1T' => 1,'2T' => 2,'3T' => 3,'4T' => 4,'5T' => 5,'6T' => 6,'7T' => 7,'JT' => 0.5,'QT' => 0.5,'KT' => 0.5,
    ];


    
    $baraja = revolverCartas($baraja);



    /* --- Repartir Cartas ---
        - Para cada jugador tomamos las primeras N cartas del mazo (con array_slice)
        - Se mantiene la clave con el cuarto parámetro true
        - Se eliminan esas cartas del mazo con array_diff_key()
    */
    foreach ($jugadores as $nombre => $cartas) {

        //Saca cartas
        $mano = array_slice($baraja, 0, $numCartas, true);

        //Se la damos al jugador
        $jugadores[$nombre] = $mano;

        // Eliminar cartas sacadas
        $baraja = array_diff_key($baraja, $mano);
    }

    return $jugadores;

    
}

function obtenerSuma ($jugadores){

    $jugadoresBote = [];
    $total = 0;

    //Obtengo la media de la suma de las cartas en un array copia
    foreach ($jugadores as $jugador => $cartas){

        foreach($cartas as $nombreCarta => $valorCarta){

            $total += $valorCarta; 
        };

        $jugadoresBote[$jugador] = $total;
        $total = 0;
    };

    return $jugadoresBote;
}

function comprobarGanadores($jugadoresBote){

    $ganadores = [];
    //Obtengo los ganadores que no pasen más de 7.5
    foreach ($jugadoresBote as $jugador => $resultado){

        if ($resultado <= 7.5){

            $ganadores[$jugador] = $resultado;
        }
    }

    return $ganadores;
}


function repartoDinero($ganadores,$jugadoresBote){

    $bote = (float)test_input($_POST["apuesta"]);
    $numGanadores = count($ganadores);
    $reparto =[];

     // Recorremos todos los jugadores (ganadores + perdedores)
    foreach ($jugadoresBote as $jugador => $puntos) {

        // Si es ganador
        if (isset($ganadores[$jugador])) {

            // Caso 1: un solo ganador
            if ($numGanadores == 1) {
                if ($puntos < 7.5) {
                    $reparto[$jugador] = $bote * 0.5; // 50% del bote
                } else { // 7.5 exacto
                    $reparto[$jugador] = $bote * 0.8; // 80% del bote
                }
            }

            // Caso 2: 2 o más ganadores
            elseif ($numGanadores >= 2) {

                // Comprobar si alguno tiene 7.5
                $empate75 = false;
                foreach ($ganadores as $p) {
                    if ($p == 7.5) {
                        $empate75 = true;
                        break;
                    }
                }

                if ($empate75) {
                    $reparto[$jugador] = ($bote * 0.8) / $numGanadores; // 80% del bote dividido
                } else {
                    $reparto[$jugador] = ($bote * 0.5) / $numGanadores; // 50% del bote dividido
                }
            }
        } 
        // Si es perdedor
        else {
            $reparto[$jugador] = 0; // Regla 5.4: mostrar 0€
        }
    }
    return $reparto; // Devuelve array con cada jugador y su dinero
}


//-------------------------- VISUALIZACIÓN --------------------
function mostrarTabla($jugadores){
    foreach($jugadores as $nombre => $cartas){
        echo '<table border="1"';
        echo '<tr>';
        echo '<th>'.$nombre.'</th>';
        echo '<th>';
        foreach(array_keys($cartas) as $carta){
            echo '<img src="images/'.$carta.'.png" alt="'.$carta.'" style="width:100px;margin-right:5px">';
        }
        echo '</th>';
        echo '</tr>';
        echo '</table>';
    }
}


//-------------------------- SUB-FUNCIONES ------------------
function revolverCartas($baraja){

    /* --- Revolver Cartas ---
        - Hacemos una copia de las claves de la baraja en un array
        - Luego revolvemos esas claves y creamos un array para guardar el proceso
        - En el foreach() asociamos la clave del nuevo array con la clave de la baraja
        como coincide la clave, con el = pasamos ese valor a la clave del nuevo array
        como resultado revolvemos las cartas y conservamos claves y valores.  
    */
    $claves = array_keys($baraja); 
    shuffle($claves);
    $cartasBarajadas = [];
    foreach ($claves as $clave) {

        //cartasBarajadas['3C'] => null
        $cartasBarajadas[$clave] = $baraja[$clave]; //cartasBarajadas['3C'] = $baraja['3C'] (3)
        //cartasBarajadas['3C'] => 3
    }
    return $cartasBarajadas;
}

?>