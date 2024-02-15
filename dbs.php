<?php
$conn = new mysqli('localhost', 'root', '', 'u577849896_nxtep');
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

?>