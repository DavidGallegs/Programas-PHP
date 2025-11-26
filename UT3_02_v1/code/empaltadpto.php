<?php

    //--- ALTA DEPARTAMENTOS -------
    require_once("./functions.php");

    function crearCodigoDpto() {
        $conn = connectionRoot(); 
        $stmt = $conn->query("SELECT cod_dpto FROM departamento ORDER BY cod_dpto DESC LIMIT 1");
        $ultimo = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($ultimo) {
            $num = (int)substr($ultimo['cod_dpto'], 1) + 1;
        } else {
            $num = 1;
        }

        return 'D' . str_pad($num, 3, '0', STR_PAD_LEFT);
    }

    try {
        $conn = connectionRoot();

        // Iniciar transacción
        $conn->beginTransaction();

        // Preparar INSERT con parámetros
        $stmt = $conn->prepare("
            INSERT INTO departamento (cod_dpto, nombre_dpto)
            VALUES (:cod_dpto, :nombre)
        ");


        $stmt->execute([
            ':cod_dpto' => $codDpto = crearCodigoDpto(),
            ':nombre'   => test_input($_POST['nombre'])
        ]);

        // Confirmar cambios
        $conn->commit();


        //Preguntar si de otra forma
        echo $stmt->rowCount() . " registros añadidos correctamente.";

    } catch(PDOException $e) {
        // Revertir cambios si ocurre error
        if ($conn->inTransaction()) {
            $conn->rollBack();
        }
        echo "Error: " . $e->getMessage() . "<br>";
        echo "Código de error: " . $e->getCode();
    } finally {
        $conn = null;
    }

?>
