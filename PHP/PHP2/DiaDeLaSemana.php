<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia de la Semana</title>
</head>
<body>
    <h1>Dia de la Semana</h1>
    <?php
        // Obtenemos la fecha actual
        $fecha = date("l");

        // Generamos los mensajes dependiendo del valor
        // de la variable $fecha
        switch ($fecha) {
            case "Monday":
                echo "<p>Lunes</p>";
                break;
            case "Tuesday":
                echo "<p>Martes</p>";
                break;
            case "Wednesday":
                echo "<p>Miércoles</p>";
                break;
            case "Thursday":
                echo "<p>Jueves</p>";
                break;
            case "Friday":
                echo "<p>Viernes</p>";
                break;
            case "Saturday":
                echo "<p>sábado</p>";
                break;
            case "Friday":
                echo "<p>Domingo</p>";
                break;
        }
    ?>
</body>
</html>