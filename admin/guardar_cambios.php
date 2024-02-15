<?php
// Verifica que se haya enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Conecta a la base de datos (reemplaza con tus propias credenciales)
    $conn = new mysqli('localhost', 'root', '', 'u577849896_nxtep');

    // Verifica la conexión a la base de datos
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Itera sobre las claves y valores del formulario
    foreach ($_POST as $key => $value) {
        // Asegúrate de que el nombre del campo comience con "info" y sea numérico
        if (substr($key, 0, 4) === 'info' && is_numeric(substr($key, 4))) {
            // Obtiene el ID del registro desde el nombre del campo
            $id_info = substr($key, 4);

            // Escapa el valor para prevenir inyección SQL
            $contenido = $conn->real_escape_string($value);

            // Actualiza el registro en la base de datos
            $sql = "UPDATE tbl_infos SET contenido = '$contenido' WHERE id = $id_info";

            if ($conn->query($sql) !== TRUE) {
                $response = ['status' => 'error', 'message' => 'Error al actualizar el registro: ' . $conn->error];
                http_response_code(500);
                echo json_encode($response);
                exit;
            }
        }
    }

    // Cierra la conexión a la base de datos
    $conn->close();

    // Respuesta exitosa
    $response = ['status' => 'success', 'message' => 'Datos actualizados correctamente'];
    echo json_encode($response);
  
} else {
    // Si la solicitud no es POST, emite un error
    http_response_code(400);
    $response = ['status' => 'error', 'message' => 'Solicitud no válida'];
    echo json_encode($response);
}
?>
