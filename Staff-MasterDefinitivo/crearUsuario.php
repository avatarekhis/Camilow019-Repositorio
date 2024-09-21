<?php
include_once "index_conex.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    
    // Hashear la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    
    if ($conn->query($sql)) {
        echo "<script>alert('Registro exitoso!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Creación de Usuario</title>
    <link rel="stylesheet" href="styleAdmin.css">
</head>
<body>
    <header class="header">
    <img id="logo" src="IMG/logostfm-whitepng.png" alt="">
    <h1 id="titulo">Staff-Master: Administrador</p>
    <a class="atras" href="index_admin.php">Atrás</a>
    </header>
<center><h1>Registro de Usuario</h1></center>
   <center>
   <form class="form" action="crearUsuario.php" method="POST">
       <div class="input-container">
       <p class="p-admin">Nombre de Usuario:</p>
        <input class="input-text" type="text" name="username" placeholder="Usuario" required><br><br>
        <p class="p-admin" for="email">Correo:</p>
        <input class="input-text" type="email" name="email" placeholder="Correo" required><br><br>
        <p class="p-admin" for="password">Contraseña:</p>
        <input class="input-text" type="password" name="password" placeholder="Contraseña" required><br><br>
        <input class="submit" type="submit" value="Registrar"><br>
        <span class="input-line"></span>
       </div>
    </form>
   </center>
</body>
</html>
