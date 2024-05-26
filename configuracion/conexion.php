<?php


$dsn = 'mysql:host=localhost;port=3306;dbname=hulk';
$username = 'root';
$password = '';

try {
    
    $conexion = new PDO($dsn, $username, $password);

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Conexión exitosa";
} catch (PDOException $e) {
    
    echo "Error de conexión: " . $e->getMessage();
        die();
}
?>