<?php
    include 'media7fun.php';
    /*  Creamos un array vacío llamado $jugadores,
    - Pasa por creaJugadores() para darle un nombre a la clave y dejar el valor en null.
    - En repartirCartas() asignamos un array de N cartas a los jugadores
    - En obtenerSuma() creamos un array copia del original con la suma de sus cartas como valor y clave nombre
    - En comprobarGanadores() creamos un array copia de obtenerSuma() con solo los ganadores
    - En repartirDinero() repartimos el dinero a los ganadores y generamos un array reparto (array Final)
    */

    $jugadores = crearJugadores();
    $jugadores = repartirCartas($jugadores);

    mostrarTabla($jugadores);

    $jugadoresBote = obtenerSuma($jugadores);
    $ganadores = comprobarGanadores($jugadoresBote);
    $reparto = repartoDinero($ganadores,$jugadoresBote);
    
    mostrarEnFichero($jugadoresBote, $reparto);

    
?>  