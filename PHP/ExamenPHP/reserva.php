<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <p><label for="nombre">Nombre:</label><input type="text" id="nombre" name="nombre" required></p>
    <p><label for="apellidos">Apellidos:</label><input type="text" id="apellidos" name="apellidos" required></p>
    <p><label for="mail">Email:</label><input type="email" id="mail" name="mail" required></p>
    <p><label for="dni">DNI:</label><input type="text" id="dni" name="dni" required></p>
    <select name="tipoRes" id="tipoRes" required>
        <option value="simple">Simple (30€)</option>
        <option value="doble">Doble (50€)</option>
        <option value="triple">Triple (80€)</option>
        <option value="suite">Suite (100€)</option>
  </select>
  <p>Fecha: <input type="text" id="datepicker"></p>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    <p><input type="submit" name="submit" value="Enviar datos"></p>
</form>

<?php
if (isset($_POST['submit'])) {
    $nombre = filter_var($_POST['nombre']);
    $apellidos = filter_var($_POST['apellidos']);
    $mail = filter_var($_POST['mail']);
    $DNI = filter_var($_POST['dni']);
}
?>
</body>
</html>