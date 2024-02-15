<?php

// Incluye el archivo de configuración de la base de datos
include 'db_config.php';

session_start();

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT id FROM tbl_users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Credenciales válidas, inicia la sesión y redirige a index.php
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row["id"];
        header("Location: index.php");
    } else {
        // Credenciales inválidas, redirige a login.php
        header("Location: login.php");
    }

    // Cierra la conexión a la base de datos
    $conn->close();
} else {
    // Si no se enviaron datos del formulario, redirige a login.php
    header("Location: logins.php");
}
?>
