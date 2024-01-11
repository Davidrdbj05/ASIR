<?php
$host = 'sql307.thsite.top';   
$user = 'thsi_35748551';   
$pass = "WF?1e!ZI";   
$database = 'thsi_35748551_bdpruebas';     
$conn = mysqli_connect($host,$user,$pass,$database);   
if (!$conn) {                                             
    die("Conexión fallida con base de datos: " . mysqli_connect_error());     
  } else {echo("<p>Conexión Lograda</p>");}
?>


