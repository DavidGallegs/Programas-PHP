<?php

require_once("pokerldv_fun.php");

// Crear jugadores y almacenar en $jugadores
$jugadores = crearJugadores(); 

// Crear la baraja usando los jugadores
$jugadores = crearBaraja($jugadores);

// Repartir cartas y calcular resultados
$jugadores = repartirCartas_Y_resultadoRonda($jugadores);

?>
