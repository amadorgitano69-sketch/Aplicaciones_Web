<?php
    include "db.php";

    //echo "Entro en fichero procesar";

    if ($_POST) {
        $nombre= $_POST["nombre"];
        $email= $_POST["email"];
        $edad= $_POST["edad"];
        $rol= $_POST["rol"];

        //echo "Este es el nombre";
    try {    
        $stmt= $pdo->prepare("INSERT INTO usuarios (nombre,email,edad,rol) VALUES (?,?,?,?)");
        $stmt->execute([$nombre,$email,$edad,$rol]);
    } catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
    }
        header("Location: list.php");
        exit;
    }
?>