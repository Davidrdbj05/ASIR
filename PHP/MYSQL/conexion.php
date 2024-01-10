<?php
$host = 'sql110.thsite.top';   
$user = 'thsi_35561548';   
$pass = "iWhgHp!9";   
$database = 'thsi_35561548_database';     
$conn = mysqli_connect($host,$user,$pass,$database);   
if (!$conn) {                                             
    die("Conexión fallida con base de datos: " . mysqli_connect_error());     
  }
?>