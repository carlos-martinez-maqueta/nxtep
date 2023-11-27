<?php
// Conexión a la base de datos (reemplaza los valores con los de tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_nxtep";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

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
	$area = $_POST['area'];

	// Genera nombres de archivo únicos y sin espacios
	$imagenPerfil = uniqid() . '_' . str_replace(' ', '_', $_FILES['img_perfil']['name']);
	$imagenLogo = uniqid() . '_' . str_replace(' ', '_', $_FILES['img_logo']['name']);

	// Directorio donde se guardarán las imágenes
	$targetDir = "uploads/";

	// Ruta completa de las imágenes
	$targetFilePathPerfil = $targetDir . $imagenPerfil;
	$targetFilePathLogo = $targetDir . $imagenLogo;


	// Mueve las imágenes al directorio de destino
	move_uploaded_file($_FILES['img_perfil']['tmp_name'], $targetFilePathPerfil . $imagenPerfil);
	move_uploaded_file($_FILES['img_logo']['tmp_name'], $targetFilePathLogo . $imagenLogo);
    // ... Otros campos ...

	// Consulta SQL para insertar datos en la tabla
	$sql = "INSERT INTO tbl_mentores (nombres, apellidos, precio, estrellas, cargo, empresa, linkedin, experiencia, area, img_perfil, img_logo) VALUES ('$nombres', '$apellidos', '$precio', '$estrellas', '$cargo', '$empresa', '$linkedin', '$experiencia', '$area', '$targetFilePathPerfil', '$targetFilePathLogo')";


    // Ejecuta la consulta
    if ($conn->query($sql) === TRUE) {
        // Si la inserción es exitosa, devuelve una respuesta JSON
        echo json_encode(['status' => 'success', 'message' => 'Datos insertados correctamente']);
    } else {
        // Si hay un error, devuelve una respuesta JSON con el mensaje de error
        echo json_encode(['status' => 'error', 'message' => 'Error al insertar datos: ' . $conn->error]);
    }
}

// Cierra la conexión
$conn->close();
?>
