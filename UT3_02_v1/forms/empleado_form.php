<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomrulario</title>
</head>
<body>
    <form action="../code/empaltaemp.php" method="POST">
        <h2>Formulario Alta Empleados</h2>

        <label>DNI del empleado:</label>
        <input type="text" name="dni"><br>
        
        <label>Nombre del empleado:</label>
        <input type="text" name="nombre"><br>

        <label>Apellidos del empleado:</label>
        <input type="text" name="apellidos"><br>

        <label>Fecha de nacimiento del empleado:</label>
        <input type="date" name="fecha_nac"><br>

        <label>Salario:</label>
        <input type="number" name="salario"><br>


        <label>Departamento inicial:</label>
        <select name="cod_dpto" required>
            <?php
                require_once("../code/functionsSql.php");
                $departamentos = obtenerDepartamentos();

                foreach ($departamentos as $dpt) {
                    echo "<option value='{$dpt['cod_dpto']}'>{$dpt['nombre_dpto']}</option>";
                }
            ?>
        </select>
        <input type="submit" value="Enviar">


        
    </form>
</body>
</html>