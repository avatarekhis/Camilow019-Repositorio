<?php
session_start();
include_once "index_conex.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    
    // Consulta al usuario por nombre de usuario
    $sql = "SELECT * FROM usuarios WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verificar la contraseña hasheada
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header('Location: index_perfil.php'); // Redirigir a la página de bienvenida o dashboard
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/stile.css">
</head>
<body>
<div id="fondo-login">
    <img src="IMG/logostfm-whitepng.png" alt="" id="logo">
    <h1><p>Staff-Master</p></h1>
</div>

    <article id="cuadro-login">
        <form action="index_login_usuarios.php" method="post">
            <br><br>
            <center><h2>Iniciar Sesion: Empleados</h2></center>
            <br>
            <span>Usuario:</span><br><br>
            <input type="text" id="caja_texto" name="username"><br>
            <br>
            <span>Contraseña:</span><br><br>
            <input type="password" id="caja_texto" name="password"><br>
            <!-- <hr id="linea"> </hr> -->
            <br><br>
            <input type="submit" value="Iniciar Sesion" id="bot-inisesion">
            <br><br>
            <a href="">¿Olvidaste tu contraseña?</a>

        </form>
    </article>
</body>
</html>
