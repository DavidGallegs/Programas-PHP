<?php

    require_once("functions.php");

    //Función usada por empleado_form.php
    function obtenerDepartamentos() {
        
        try 
        {
            $conn = connectionRoot();
            $stmt = $conn->prepare("SELECT cod_dpto,nombre_dpto FROM departamento");
            $stmt->execute();
            $departamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error en BD: " . $e->getMessage();
            $departamentos = [];
        } finally {
            $conn = null;
        }
        return $departamentos;

    }


    //Funciones usadas por cambiodpto_form.php
    function obtenerDni() {
        
        try 
        {
            $conn = connectionRoot();
            $stmt = $conn->prepare("SELECT dni FROM empleado");
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error en BD: " . $e->getMessage();
            $lista = [];
        } finally {
            $conn = null;
        }
        return $lista;

    }

?>