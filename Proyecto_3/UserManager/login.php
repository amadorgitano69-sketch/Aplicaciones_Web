<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - UserManager</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="js/validacion.js" defer></script>
</head>
<body>
    <div class="cuadro1">
            <h1>Iniciar sesión</h1>       
            <?php if (isset($_GET['error'])): ?>
                <div class="error">Email o contraseña incorrectos</div>
            <?php endif; ?>
            
            <form id="loginForm" action="procesar_login.php" method="post">
                    <label>Email:</label>
                    <input type="email" name="email" id="loginEmail" required>
                    <div class="error-msg" id="email-error"></div>
                    <label>Contraseña:</label>
                    <input type="password" name="password" id="loginPassword" required>
                    <div class="error-msg" id="password-error"></div>
              <div class="btn">
                <button type="submit">Entrar</button>
              </div>             
            </form>
            <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
</body>
</html>