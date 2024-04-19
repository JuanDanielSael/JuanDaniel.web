<?php
// Establece la conexión a la base de datos
$host = 'localhost';
$usuario_bd = 'sael';
$contraseña_bd = '@Sael1313';
$nombre_bd = 'aplicacion_sael';

$conexion = new mysqli($host, $usuario_bd, $contraseña_bd, $nombre_bd);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtiene los datos del formulario
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];

// Realiza la inserción en la base de datos
$consulta = "INSERT INTO registro (nombre, contraseña, email, telefono, sexo, fecha) VALUES (?, ?, ?, ?, ?, ?)";
$statement = $conexion->prepare($consulta);

// Verifica si la consulta preparada se realizó correctamente
if (!$statement) {
    die("Error al preparar la consulta: " . $conexion->error);
}

// Bind parameters y execute la consulta
$statement->bind_param("ssssss", $nombre, $contraseña, $email, $telefono, $sexo, $fecha);
$resultado = $statement->execute();

// Verifica si la inserción fue exitosa
if ($resultado) {
    // Registro exitoso
    echo '<script>alert("Registro exitoso. Ahora puede iniciar sesión.");';
    echo 'window.location.href = "index.html";</script>';
} else {
    // Error en la inserción
    echo "Error al registrar usuario: " . $conexion->error;
}

// Cierra la conexión y el statement
$statement->close();
$conexion->close();
?>
