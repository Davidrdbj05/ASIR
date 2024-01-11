<?php
    // Conexión al servidor
    include "db.php";
    // Conexión a base de datos mediante PDO
    $result = $conn->query("SELECT * FROM usuarios LIMIT 1");
    if ($result->num_rows > 0) {
        echo "<h1>Resultados</h1>";
        echo "<table><tr><th>ID</th><th>usuario</th><th>contraseña</th></tr>";
        $row = $result->fetch_assoc();
        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
        echo "</table>";
    } else {
    echo "<p>0 results</p>";
    }
    $conn->close();
?>