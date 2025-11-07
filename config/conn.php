<?php 

//configuración de la base de datos

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "inventario_v1";
$db_port = 3306;

// Crear conexión

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

echo "Conexión exitosa";

?>
