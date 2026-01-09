<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Crear Usuarios</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="from-container">
        <h1>Crear Usuarios</h1>

        <form method="POST" action="procesarOK_create.php">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="edad" placeholder="Edad" required>
            <select name="rol">
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
            <button class="btn" type="submit">Guardar</button>
        </form>
    </div>
    <script src="js/validacion.js"></script>
</body>
</html>