<?php
// Incluye el archivo de configuración de la base de datos
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtiene los valores del formulario
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $precio = $_POST['precio'];
    $estrellas = $_POST['estrellas'];
    $cargo = $_POST['cargo'];
    $empresa = $_POST['empresa'];
    $linkedin = $_POST['linkedin'];
    $experiencia = $_POST['experiencia'];
    $agenda = $_POST['agenda'];

    // Genera nombres de archivo únicos y sin espacios
    $imagenPerfil = uniqid() . '_' . str_replace(' ', '_', $_FILES['img_perfil']['name']);
    $imagenLogo = uniqid() . '_' . str_replace(' ', '_', $_FILES['img_logo']['name']);

    // Directorio donde se guardarán las imágenes
    $targetDir = "uploads/";

    // Ruta completa de las imágenes
    $targetFilePathPerfil = $targetDir . $imagenPerfil;
    $targetFilePathLogo = $targetDir . $imagenLogo;

    // Mueve las imágenes al directorio de destino
    move_uploaded_file($_FILES['img_perfil']['tmp_name'], $targetFilePathPerfil);
    move_uploaded_file($_FILES['img_logo']['tmp_name'], $targetFilePathLogo);

    // Inserta datos en la tabla tbl_mentores
    $sqlMentores = "INSERT INTO tbl_mentores (nombres, apellidos, precio, estrellas, cargo, empresa, linkedin, experiencia, agenda, img_perfil, img_logo) VALUES ('$nombres', '$apellidos', '$precio', '$estrellas', '$cargo', '$empresa', '$linkedin', '$experiencia', '$agenda', '$targetFilePathPerfil', '$targetFilePathLogo')";

    // Ejecuta la consulta
    if ($conn->query($sqlMentores) === TRUE) {
        // Obtiene el ID del mentor recién insertado
        $mentorID = $conn->insert_id;

        // Inserta datos en la tabla tbl_mentores_areas si se seleccionó alguna área
        if (isset($_POST['areas']) && is_array($_POST['areas'])) {
            foreach ($_POST['areas'] as $areaID) {
                $sqlMentoresAreas = "INSERT INTO tbl_mentores_areas (mentor_id, area_id) VALUES ('$mentorID', '$areaID')";
                $conn->query($sqlMentoresAreas);
            }
        }

        // Inserta datos en la tabla tbl_mentores_temas si se seleccionó algún tema
        if (isset($_POST['temas']) && is_array($_POST['temas'])) {
            foreach ($_POST['temas'] as $temaID) {
                $sqlMentoresTemas = "INSERT INTO tbl_mentores_temas (mentor_id, tema_id) VALUES ('$mentorID', '$temaID')";
                $conn->query($sqlMentoresTemas);
            }
        }

        // Devuelve una respuesta JSON
        echo json_encode(['status' => 'success', 'message' => 'Datos insertados correctamente']);
    } else {
        // Si hay un error, devuelve una respuesta JSON con el mensaje de error
        echo json_encode(['status' => 'error', 'message' => 'Error al insertar datos en tbl_mentores: ' . $conn->error]);
    }
}

// Cierra la conexión
$conn->close();
?>
