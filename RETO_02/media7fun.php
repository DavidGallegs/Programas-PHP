<?php

//--- MAIN ----
/*
    En main creamos un array vacío llamado $jugadores,
    -Pasa por creaJugadores() para darle un nombre a la clave y dejar el valor en null.
    -En repartirCartas() asignamos un array de N cartas a los jugadores
*/ 
function main(){

    $jugadores = crearJugadores();
    $jugadores = repartirCartas($jugadores);
} 

function crearJugadores(){ 

    $jugador1 = $_POST["nombre1"];
    $jugador2 = $_POST["nombre2"];
    $jugador3 = $_POST["nombre3"];
    $jugador4 = $_POST["nombre4"];

    //Creo los jugadores
    $jugadores = [$jugador1 => [],$jugador2 => [],$jugador3 => [],$jugador4 => []];

    return $jugadores;
}


function repartirCartas($jugadores){

    $numCartas = $_POST["numCartas"];
    //Creo las cartas
    $cartas = [
    '1C' => 1,'2C' => 2,'3C' => 3,'4C' => 4,'5C' => 5,'6C' => 6,'7C' => 7,'JC' => 0.5,'QC' => 0.5,'KC' => 0.5,
    '1D' => 1,'2D' => 2,'3D' => 3,'4D' => 4,'5D' => 5,'6D' => 6,'7D' => 7,'JD' => 0.5,'QD' => 0.5,'KD' => 0.5,
    '1H' => 1,'2H' => 2,'3H' => 3,'4H' => 4,'5H' => 5,'6H' => 6,'7H' => 7,'JH' => 0.5,'QH' => 0.5,'KH' => 0.5,
    '1S' => 1,'2S' => 2,'3S' => 3,'4S' => 4,'5S' => 5,'6S' => 6,'7S' => 7,'JS' => 0.5,'QS' => 0.5,'KS' => 0.5,
    ];

    //Remuevo las cartas
    shuffle($cartas); //Se pierde las claves

    // $claves = array_keys($cartas);
    // shuffle($claves);
    // $cartasBarajadas = [];
    // foreach ($claves as $clave) {
    //     $cartasBarajadas[$clave] = $cartas[$clave];
    // }
    // $cartas = $cartasBarajadas;

    //Repatir
    foreach ($jugadores as $x) {
        
        //Reparte N cartas desde el inicio
        //Seleccionamos solo $x porque esta vacio, no es necesario acceder a $y
        $jugadores[$x] = array_splice($cartas,0,$numCartas); 
    };

    return $jugadores;
}



/* --- ComprobarGanadores() ---
    -Crea el array $jugadoresBote con el nombre del jugador y la suma de los valores de sus cartas.
    -Crea el array $ganadores con el nombre del jugador y su valor total siempre y cuando sea menor o igual a 7.5

*/  
function comprobarGanadores($jugadores){

    $bote = $_POST["apuesta"];
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

    $ganadores = [];
    $contadorGanadores = 0;
    //Obtengo los ganadores que no pasen más de 7.5
    foreach ($jugadoresBote as $jugador => $resultado){

        if ($resultado <= 7.5){

            $ganadores[$jugador] = $resultado;
            $contadorGanadores++;
        }
    }





}


function repartoDinero($ganadores, $contadorGanadores){

    if ($contadorGanadores != 0){

        if($contadorGanadores == 1 && $ganadores ){
            
        }
    }



}

//- VISUALIZAR LAS CARTAS Y NOMBRE EN TABLA (Antes de comprobar lso ganadores)
//- PASAR A UN FICHERO LOS DATOS QUE SE PIDE (Una vez determinado el/los ganadores
// se llama en la función comprobarGanadores() a una función que guarde los
//datos necesarios en el fichero)

?>