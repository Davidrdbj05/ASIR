<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora</title>
    <style>
        #caja{
            width:400px;
            height:400px;
        }
    </style>
</head>
<body>
    <h1>Fecha y Hora</h1>
    <?php
        date_default_timezone_set('Spain/Madrid');
        setlocale(LC_ALL, 'es_ES.UTF-8');
        echo ucwords(strftime("%A %d %B %Y %R"));
    ?>
</body>
</html>