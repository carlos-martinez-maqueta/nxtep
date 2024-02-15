<?php
// Incluye el archivo de configuración de la base de datos
include 'db_config.php';

// Obtiene el ID del registro a eliminar desde la solicitud POST
$id = isset($_POST['id']) ? $_POST['id'] : null;

// Verifica si el ID está presente
if (!$id) {
    $response = array('status' => 'error', 'message' => 'ID no proporcionado');
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

// Consulta SQL para eliminar el registro
$sql = "DELETE FROM tbl_mentores WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    $response = array('status' => 'success', 'message' => 'Registro eliminado con éxito');
} else {
    $response = array('status' => 'error', 'message' => 'Error al eliminar el registro: ' . $conn->error);
}

// Cierra la conexión a la base de datos
$conn->close();

// Devuelve la respuesta como JSON con el encabezado correcto
header('Content-Type: application/json');
echo json_encode($response);
?>
