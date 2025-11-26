# ESTRUCTURA DE CARPETAS
- Code
    - empaltadpto.php
    - empaltaemp.php
    - empcambiodpto.php
    - functions.php
    - functionsSql.php
- Forms
    - cambiodpto_form.php
    - empaltadpto.html
    - empleado_form.php

## ENUNCIADO 1: ALTA DEPARTAMENTOS
- forms:
    - `emplatadpto.html`: Formulario que recibe los datos para crear el departamento.

- code:
    - `functions.php` : Contiene las funciones de test_input() y connectionRoot()
    - `empaltadpto.php`: Contiene crearCodigo(): Crea un código para cada departamento.
        Y utiliza [functions.php], crearCodigo() y recibe los parámetros del formulario[empladpto.html].

## ENUNCIADO 2: ALTA EMPLEADOS
- forms: 
    - `empleado_form.php`: Formulario que recibe los datos para crear el empleado en empleados y emple_depto.
        Utiliza la función obtenerDepartamentos()[functionsSql.php]

- code:
    - functions.php : Contiene las funciones de test_input() y connectionRoot().
    - `functionsSql.php`: Contiene la función obtenerDepartamentos() y llama a [functions.php].
    - `empaltaemp.php`: Llama a [functions.php] y recibe los datos del formulario[empleado_form.php] y crea un empleado
        en la tabla empleado y emple_depart.


## ENUNCIADO 3: CAMBIO DE DEPARTAMENTOS
- forms:
    - `cambiodpto.php`: Formulario que cambia el departamento en función del DNI.
        Puedes elegir el DNI y COD_DPTO, llama a [functionsSql.php] a sus funciones obtenerDepartamentos() y obtenerDni().

- code:
    - functions.php : Contiene las funciones de test_input() y connectionRoot().
    - functionsSql.php: Contiene la función obtenerDepartamentos(), obtenerDni y llama a [functions.php].
    - `empcambiodpto.php`:  Llama a [functions.php] y recibe los datos del formulario [cambiodpto.php], tras eso
        con los parámetros recibidos realiza un UPDATE para hacer un cambio de departamentos en función del DNI.