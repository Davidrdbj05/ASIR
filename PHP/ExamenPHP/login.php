<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="contraseña">Contraseña:</label>
        <input type="text" id="contraseña" name="contraseña" required>
        <input type="submit" name="submit" value="Enviar">
    </form>
<?php
$configs = include('config.php');
if (isset($_POST['submit'])) {
    if (isset($_POST['nombre']) && !empty($_POST['nombre']) 
    && isset($_POST['contraseña']) && !empty($_POST['contraseña'])) {
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        $contraseña = $_POST['contraseña'];
        if ($nombre==$user && $contraseña==$password) {
        echo "<p>Acceso concedido</p>";    
        }
    else {echo "<br> Acceso denegado";}
} else {
    echo "Introduzca los valores requeridos";
}}
?>
</body>
</html>