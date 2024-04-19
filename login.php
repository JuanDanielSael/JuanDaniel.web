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

// Consulta preparada para verificar las credenciales
$consulta = "SELECT * FROM registro WHERE nombre = ? AND contraseña = ?";
$statement = $conexion->prepare($consulta);

// Verifica si la consulta preparada se realizó correctamente
if (!$statement) {
    die("Error al preparar la consulta: " . $conexion->error);
}

// Bind parameters y execute la consulta
$statement->bind_param("ss", $nombre, $contraseña);
$statement->execute();

// Obtiene el resultado de la consulta
$resultado = $statement->get_result();

// Verifica si se encontraron filas
if ($resultado->num_rows > 0) {
    // Las credenciales son válidas
    session_start();
    $_SESSION['nombre'] = $nombre;
    echo "success"; // Envía una respuesta de éxito
} else {
    // Las credenciales no son válidas
    echo "Usuario o contraseña incorrectos";
}

// Cierra la conexión y el statement
$statement->close();
$conexion->close();
?>
