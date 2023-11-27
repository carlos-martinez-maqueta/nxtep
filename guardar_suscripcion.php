<?php
// Conexión a la base de datos (reemplaza estos valores con los tuyos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_nxtep";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el correo del formulario
$correo = $_POST['correo'];

// Insertar datos en la tabla tbl_boletin
$sql = "INSERT INTO tbl_boletin (correo) VALUES ('$correo')";

if ($conn->query($sql) === TRUE) {
    echo "Suscripción exitosa";
} else {
    echo "Error al suscribirse: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
