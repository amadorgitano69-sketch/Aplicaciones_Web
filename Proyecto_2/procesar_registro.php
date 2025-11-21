<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>procesar_registro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="body1">
 <div class="recuadro">
    <?php
include "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$check = $conn->prepare("SELECT id FROM usuarios WHERE usuario = ?");
$check->bind_param("s", $usuario);
$check->execute();
$check->store_result();
if ($check->num_rows > 0) {
    echo "<h1>Error: el usuario ya existe ❌</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
    $check->close();
    $conn->close();
    exit();
}

$check->close();
$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $hash);
if ($stmt->execute()) {
    echo "<h1>Usuario registrado correctamente 🎉</h1>";
    echo "<p><a href='login.php'>Iniciar sesión</a></p>";
} else {
    echo "<h1>Error al registrar</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
}

$stmt->close();
$conn->close();
?>
</div>
</div>
</body>
</html>