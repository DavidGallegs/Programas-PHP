<?php
    require_once("functions.php");

    //----- ALTA EMPLEADOS ---------
    try {
        $conn = connectionRoot();

        $conn->beginTransaction();


        //- AÑADO EMPLEADO
        $stmt = $conn->prepare("
            INSERT INTO empleado (dni,nombre,apellidos,fecha_nac,salario)
            VALUES (:dni,:nombre,:apellidos,:fecha_nac,:salario)
        ");

        $stmt->execute([
            ':dni' => test_input($_POST['dni']),
            ':nombre'   => test_input($_POST['nombre']),
            ':apellidos' => test_input($_POST['apellidos']),
            ':fecha_nac' => test_input($_POST['fecha_nac']),
            ':salario' => test_input($_POST['salario'])
        ]);


        //AÑADO EMPLEADO A LA TABLA EMPELADO_DEPARTAMENTO (INTERMEDIA)
        $stmt2 = $conn->prepare("
            INSERT INTO emple_depart (dni, cod_dpto,fecha_ini,fecha_fin)
            VALUES (:dni, :cod_dpto,NOW(),NULL)
        ");

        $stmt2->execute([
            ':dni'      => test_input($_POST['dni']),
            ':cod_dpto' => test_input($_POST['cod_dpto']),
        ]);

        $conn->commit();
        echo  " Empleado y departamentos añadidos correctamente.";

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