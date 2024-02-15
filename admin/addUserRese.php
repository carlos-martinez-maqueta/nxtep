<?php
// Incluye el archivo de configuración de la base de datos
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtiene los valores del formulario
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cargo = $_POST['cargo'];
    $empresa = $_POST['empresa'];
    $linkedin = $_POST['linkedin'];
    $resena = $_POST['resena'];
    

    // Genera nombres de archivo únicos y sin espacios
    $imagenPerfil = uniqid() . '_' . str_replace(' ', '_', $_FILES['img_perfil']['name']);

    // Directorio donde se guardarán las imágenes
    $targetDir = "uploads/";

    // Ruta completa de las imágenes
    $targetFilePathPerfil = $targetDir . $imagenPerfil;

    // Mueve las imágenes al directorio de destino
    move_uploaded_file($_FILES['img_perfil']['tmp_name'], $targetFilePathPerfil);

    // Inserta datos en la tabla tbl_mentores
    $sqlMentores = "INSERT INTO tbl_resenas (nombres, apellidos, cargo, empresa, linkedin, resena, img_perfil) VALUES ('$nombres', '$apellidos', '$cargo', '$empresa', '$linkedin', '$resena', '$targetFilePathPerfil')";

    // Ejecuta la consulta
    if ($conn->query($sqlMentores) === TRUE) {
        // Devuelve una respuesta JSON
        echo json_encode(['status' => 'success', 'message' => 'Datos insertados correctamente']);
    } else {
        // Si hay un error, devuelve una respuesta JSON con el mensaje de error
        echo json_encode(['status' => 'error', 'message' => 'Error al insertar datos ' . $conn->error]);
    }
}

// Cierra la conexión
$conn->close();
?>
