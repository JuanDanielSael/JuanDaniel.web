<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de base de datos no está en localhost
$username = "root"; // Cambia esto por tu nombre de usuario de la base de datos
$password = "@sael1313"; // Cambia esto por tu contraseña de la base de datos
$database = "aplicacion_sael"; // Cambia esto por el nombre de tu base de datos

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los valores del formulario
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];

// Preparar la consulta SQL para insertar datos
$sql = "INSERT INTO registro (nombre, contraseña, email, telefono, sexo, fecha) VALUES ('$nombre', '$contraseña', '$email', '$telefono', '$sexo', '$fecha')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
