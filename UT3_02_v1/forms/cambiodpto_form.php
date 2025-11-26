<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomrulario</title>
</head>
<body>
    <form action="../code/empcamiodpto.php" method="POST">
        <h2>Formulario Cambio departamento</h2>

        <label>Elegir empleado:</label>
        <select name="dni" required>
            <?php
                require_once("../code/functionsSql.php");
                $lista = obtenerDni();

                foreach ($lista as $empleado) {
                    echo "<option value='{$empleado['dni']}'>{$empleado['dni']}</option>";
                }
            ?>
        </select><br>

        <label>Elegir nuevo Departamento:</label>
        <select name="cod_dpto" required>
            <?php
                require_once("../code/functionsSql.php");
                $departamentos = obtenerDepartamentos();

                foreach ($departamentos as $departamento) {
                    echo "<option value='{$departamento['cod_dpto']}'>{$departamento['cod_dpto']}</option>";
                }
            ?>
        </select>

        <input type="submit" value="Enviar">


        
    </form>
</body>
</html>