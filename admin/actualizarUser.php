<?php
// Inicia la sesión
session_start();

// Incluye el archivo de configuración de la base de datos
include 'db_config.php';

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    // Si no está autenticado, redirige a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Verifica si se proporciona un ID válido en la URL
if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Actualiza los datos en la base de datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Realiza la actualización de los datos según tus necesidades
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $precio = $_POST['precio'];
        $estrellas = $_POST['estrellas'];
        $cargo = $_POST['cargo'];
        $empresa = $_POST['empresa'];
        $linkedin = $_POST['linkedin'];
        $experiencia = $_POST['experiencia'];
        $agenda = $_POST['agenda'];
        // ... Continúa con los demás campos

        $sql = "UPDATE tbl_mentores SET 
                nombres = '$nombres', 
                apellidos = '$apellidos', 
                precio = '$precio', 
                estrellas = '$estrellas', 
                cargo = '$cargo', 
                empresa = '$empresa', 
                linkedin = '$linkedin', 
                experiencia = '$experiencia', 
                agenda = '$agenda' 
                WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            $response = array("status" => "success", "message" => "Datos actualizados correctamente");
        } else {
            $response = array("status" => "error", "message" => "Error al actualizar datos: " . $conn->error);
        }

        // Devuelve la respuesta como JSON
        echo json_encode($response);

        // Cierra la conexión a la base de datos
        $conn->close();
        exit();
    }
} else {
    // Si no se proporciona un ID válido, muestra un mensaje o redirige según tus necesidades
    $response = array("status" => "error", "message" => "ID no proporcionado");
    echo json_encode($response);
    exit();
}
?>
