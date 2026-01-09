<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Registro de usuario</title>
 <link rel="stylesheet" href="estilo_registro.css">
</head>
<body>
 <h1>Registro</h1>
 <form action="procesar_registro.php" method="post">
 <label>Usuario:</label><br>
 <input type="text" name="usuario" required><br><br>
 <label>Contraseña:</label><br>
 <input type="password" name="password" required><br><br>
 <button type="submit">Registrarse</button>
 </form>
 <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
</body>
</html>