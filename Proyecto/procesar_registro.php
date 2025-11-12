<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Guardamos en un archivo de texto (usuario:contraseña encriptada)

$file = fopen("usuarios.txt", "a");
fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . "\n");
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Registro</title>
    <link rel="stylesheet" href="estilo_registro.css">
</head>
<body>
    <h1>Usuario registrado correctamente</h1>
    <p><a href='login.php'>Iniciar sesión</a></p>
</body>
</html>

