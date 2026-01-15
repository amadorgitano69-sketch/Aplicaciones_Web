<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro - UserManager</title>
<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="cuadro1">
            <h1>Registro de usuario</h1>
            
            <form id="registerForm" action="procesar_registro.php" method="post" novalidate>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
                <input type="number" name="edad" placeholder="Edad" required>
                <button type="submit">Registrarse</button>
            </form>
            
            <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>
</body>
<script src="../js/validacion.js" defer></script>
</html>