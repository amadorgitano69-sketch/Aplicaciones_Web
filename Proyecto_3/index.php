<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio - UserManager</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="cuadro1">
        <h1>UserManager</h1>
        <p>Sistema de gestión de usuarios</p>
        
        <?php
        session_start();
        if (isset($_SESSION['usuario_id'])): 
        ?>
            <p>Hola, <?php echo $_SESSION['usuario_nombre']; ?></p>
            <div class="button-group">
                <a href="admin/dashboard.php" class="btn login-btn">Dashboard</a>
                <a href="UserManager/bienvenido.php" class="btn register-btn">Bienvenido</a>
            </div>
            <div style="margin-top: 10px;">
                <a href="UserManager/logout.php">Cerrar Sesión</a>
            </div>
            
        <?php else: ?>
            <div class="button-group">
                <a href="UserManager/login.php" class="btn login-btn">Iniciar Sesión</a>
                <a href="UserManager/registro.php" class="btn register-btn">Registrarse</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>