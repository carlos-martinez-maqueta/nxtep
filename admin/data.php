<?php
// Incluye el archivo de configuración de la base de datos
include 'db_config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener datos de la tabla
$sql = "SELECT id, nombres, apellidos, empresa FROM tbl_mentores";
$result = $conn->query($sql);

// Arreglo para almacenar los datos
$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Cierra la conexión a la base de datos
$conn->close();

// Devuelve los datos como JSON
echo json_encode($data);
?>
