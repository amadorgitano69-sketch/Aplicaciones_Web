<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear Usuario</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <div class="cuadro1">
            <h1>Crear Usuario</h1>
            <form method="POST" action="procesarOK_create.php">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="edad" placeholder="Edad" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <select name="rol">
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
            <button class="btn" type="submit">Guardar</button>
            </form>
            <a class="btn" href="list.php">Volver al Listado</a>
            <script src="js/validacion.js"></script>
        </div> 
</body>
</html>