<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Trabajos</title>
</head>
<style>
    #container{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
    .item {
        border: 3px solid #000;
        padding: 10px 40px 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
        margin-right: 20px;
        align-content: center;
    }
</style>
<body>
<div id=container>
    <div class="item">
        <?php
        echo "<h1>PHP 1</h1>";
        $mainPHP = './PHP/PHP1/';  // Asumiendo que tu directorio PHP está en la misma ubicación que este archivo
        $nFiles  = scandir($mainPHP);

        // Filtrar los directorios "." y ".."
        $nFiles = array_diff($nFiles, array('..', '.'));

        // Imprimir los archivos y directorios
        foreach ($nFiles as $file) {
        echo "<p><a href='http://davrb01.thsite.top/PHP/PHP1/$file' target='_blank'>$file</a></p>";
        }
        ?>
    </div>
    <div class="item">
        <?php
        echo "<h1>PHP 2</h1>";
        $mainPHP = './PHP/PHP2/';  // Asumiendo que tu directorio PHP está en la misma ubicación que este archivo
        $nFiles  = scandir($mainPHP);

        // Filtrar los directorios "." y ".."
        $nFiles = array_diff($nFiles, array('..', '.'));

        // Imprimir los archivos y directorios
        foreach ($nFiles as $file) {
        echo "<p><a href='http://davrb01.thsite.top/PHP/PHP2/$file' target='_blank'>$file</a></p>";
        }
        ?>
    </div>
    <div class="item">
        <?php
        echo "<h1>PHP 3</h1>";
        $mainPHP = './PHP/PHP3/';  // Asumiendo que tu directorio PHP está en la misma ubicación que este archivo
        $nFiles  = scandir($mainPHP);

        // Filtrar los directorios "." y ".."
        $nFiles = array_diff($nFiles, array('..', '.'));

        // Imprimir los archivos y directorios
        foreach ($nFiles as $file) {
        echo "<p><a href='http://davrb01.thsite.top/PHP/PHP3/$file' target='_blank'>$file</a></p>";
        }
        ?>
    </div>
    <div class="item">
        <?php
        echo "<h1>PHP 4</h1>";
        $mainPHP = './PHP/PHP4/';  // Asumiendo que tu directorio PHP está en la misma ubicación que este archivo
        $nFiles  = scandir($mainPHP);

        // Filtrar los directorios "." y ".."
        $nFiles = array_diff($nFiles, array('..', '.'));

        // Imprimir los archivos y directorios
        foreach ($nFiles as $file) {
        echo "<p><a href='http://davrb01.thsite.top/PHP/PHP4/$file' target='_blank'>$file</a></p>";
        }
        ?>
    </div>
    <div class="item">
        <?php
        echo "<h1>Examen PHP</h1>";
        $mainPHP = './PHP/ExamenPHP/';  // Asumiendo que tu directorio PHP está en la misma ubicación que este archivo
        $nFiles  = scandir($mainPHP);

        // Filtrar los directorios "." y ".."
        $nFiles = array_diff($nFiles, array('..', '.'));

        // Imprimir los archivos y directorios
        foreach ($nFiles as $file) {
        echo "<p><a href='http://davrb01.thsite.top/PHP/ExamenPHP/$file' target='_blank'>$file</a></p>";
        }
        ?>
    </div>
    <div class="item">
        <?php
        echo "<h1>MYSQL</h1>";
        $mainPHP = './PHP/MYSQL/';  // Asumiendo que tu directorio PHP está en la misma ubicación que este archivo
        $nFiles  = scandir($mainPHP);

        // Filtrar los directorios "." y ".."
        $nFiles = array_diff($nFiles, array('..', '.'));

        // Imprimir los archivos y directorios
        foreach ($nFiles as $file) {
        echo "<p><a href='http://davrb01.thsite.top/PHP/MYSQL/$file' target='_blank'>$file</a></p>";
        }
        ?>
    </div>
</div>
</body>
</html>