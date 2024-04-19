
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="login_styles.css">
</head>
<body>
<div class="background"></div>
<div class="login-container">
  <form id="login-form" class="login-form" action="login.php" method="post">
    <h2>Iniciar Sesión</h2>
    <div class="input-container">
      <input type="text" id="nombre" name="nombre" placeholder="Nombre de Usuario" required>
    </div>
    <div class="input-container">
      <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required>
    </div>
    <button type="submit" id="login-btn">Iniciar Sesión</button>
    <?php if (!empty($mensaje_error)): ?>
    <div class="error-msg"><?php echo $mensaje_error; ?></div>
    <?php endif; ?>
  </form>
  <p class="register-link">¿No tienes una cuenta? <a href="formulario_de_registro.html">Regístrate</a></p>
</div>
</body>
</html>
