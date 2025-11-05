<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <style>
        /* Fondo degradado azul a verde */
        body {
            background: linear-gradient(to right, #00bfff, #32cd32); /* Azul y verde */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Caja blanca donde estará el formulario */
        .caja-formulario {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        /* Estilo para los inputs */
        .caja-formulario input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Estilo para el botón */
        .caja-formulario button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .caja-formulario button:hover {
            background-color: #45a049;
        }

        /* Estilo del enlace */
        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="caja-formulario">
        <h1>Registro</h1>
        <form action="procesar_registro.php" method="post">
            <label for="usuario">Usuario:</label><br>
            <input type="text" name="usuario" id="usuario" required><br>

            <label for="password">Contraseña:</label><br>
            <input type="password" name="password" id="password" required><br>

            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="lohin.php">Inicia sesión aquí</a></p>
    </div>
</body>
</html>