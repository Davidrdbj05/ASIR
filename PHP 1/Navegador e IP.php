<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegador</title>
</head>
<body>
    <h1>Navegador</h1>
    <?php
        $navegador = $_SERVER['HTTP_USER_AGENT'];
        $ip = $_SERVER['REMOTE_ADDR'];
        echo "<p>Estas navegando desde " . $navegador . "</p>";
        echo "<p>Tu IP es " . $ip . "</p>";
    ?>
</body>
</html>