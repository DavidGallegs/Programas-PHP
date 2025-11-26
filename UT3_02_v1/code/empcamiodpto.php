<?php
    require_once("functions.php");

    try {
        $conn = connectionRoot();
        $conn->beginTransaction();


        $stmt = $conn->prepare("
            UPDATE emple_depart
            SET cod_dpto = :cod_dpto
            WHERE dni = :dni
        ");


        $stmt->execute([
            ':cod_dpto' => test_input($_POST['cod_dpto']),
            ':dni'   => test_input($_POST['dni'])
        ]);

        $conn->commit();
        echo "El cambio de departamento se ha completado";

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