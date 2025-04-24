<?php
    
    $servidor = "localhost";
    $usuario = "root";
    $password = ""; 
    $basedatos = "redsocial";

    $conexion = new mysqli($servidor, $usuario, $password, $basedatos);

    
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    echo "Conexión exitosa a la base de datos!";

    
    $sql = "SELECT * FROM usuarios LIMIT 1";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<br>La tabla usuarios contiene datos.";
    } else {
        echo "<br>La tabla usuarios está vacía.";
    }

    // Cerrar conexión
    $conexion->close();
?>