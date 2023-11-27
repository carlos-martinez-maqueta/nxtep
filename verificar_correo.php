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

// Consultar si el correo ya existe en la base de datos
$sql = "SELECT id FROM tbl_boletin WHERE correo = '$correo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // El correo ya existe en la base de datos
    echo "existe";
} else {
    // El correo no existe en la base de datos
    echo "no_existe";
}

// Cerrar la conexión
$conn->close();
?>
