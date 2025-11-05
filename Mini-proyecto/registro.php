<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="/Mini-proyecto/estilos.css">
</head>
<body class="fondo">
    <h1>Registro</h1>
    <div class="alinear-centro"> 
    <form action="procesar_registro.php" method="post"></form>
        <label for="Usuario:">Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>
        <label for="Contraseña:">Contraseña:</label><br>
        <input type="password" name="password" required><br><br>
        <div class="boton">
        <button type="submit">Registrarse</button>
        </div>
    </from>
    <p>¿Ya tienes cuenta? <a href="lohin.php">Inicia sesion aqui</a></p>
    </div>
</body>
</html>
