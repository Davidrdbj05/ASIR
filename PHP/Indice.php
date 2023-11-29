<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Trabajos</title>
</head>
<body>
<?php
echo "<h1>PHP</h1>";
$mainPHP = './PHP/';  // Asumiendo que tu directorio PHP está en la misma ubicación que este archivo
$nFiles  = scandir($mainPHP);

// Filtrar los directorios "." y ".."
$nFiles = array_diff($nFiles, array('..', '.'));

// Imprimir los archivos y directorios
echo "<ul>";
foreach ($nFiles as $file) {
    echo "<li><a href='https://myblog-qyfyw32sx5.live-website.com/PHP/$file' target='_blank'>$file</a></li>";
}
echo "</ul>";
?>

</body>
</html>