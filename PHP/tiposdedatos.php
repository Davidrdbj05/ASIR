<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Datos</title>
</head>
<body>
    <?php
        $entero = 5;
        $real = 10.8;
        $booleano = false;
        $cadena = "Hola";
        $sArray = array(1,6,-4,5);
        var_dump($entero);
        var_dump($real);
        var_dump($booleano);
        var_dump($cadena);
        var_dump($sArray);
        echo "<br><br>";
        for ($i=0;$i<4;$i++){
            echo "<p>El valor " . ($i+1) . " del array es " . $sArray[$i] . ".</p>";
        };
    ?>
</body>
</html>