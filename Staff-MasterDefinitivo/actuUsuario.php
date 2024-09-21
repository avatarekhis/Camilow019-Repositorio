<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar registro de usuario</title>
    <link rel="stylesheet" href="styleAdmin.css">
</head>
<body>
<header class="header">
    <img id="logo" src="IMG/logostfm-whitepng.png" alt="">
    <h1 id="titulo">Staff-Master: Administrador</p>
    <a class="atras" href="index_admin.php">Atrás</a>
    </header>
<div class="">
<center><h1>Actualizar un registro</h1></center>
    <?php
    include "index_conex.php"; // Conexión a la base de datos

    if (!$_POST) {
        // Consultar todos los usuarios para llenar el select
        $sql = "SELECT id, username FROM usuarios ORDER BY username";
        $result = $conn->query($sql);
        ?>
      
        <center>
        <form class="form" method="POST" action="actuUsuario.php">
            <p class="p-admin">Nombre de usuario</p>
            <br>
            <select name="usuario_id" required>
                <option value="">Selecciona un usuario</option>
                <?php
                // Generar las opciones del select
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id"] . '">' . $row["username"] . '</option>';
                }
                ?>
            </select>
            <br>
            <p class="p-admin">Nuevo Nombre de Usuario</p>
            <input class="input-text" type="text" name="nuevo_username" placeholder="Nuevo usuario" required>
            <p class="p-admin">Nuevo correo</p>
            <input class="input-text" type="email" name="email" placeholder="Nuevo correo" required>
            <p class="p-admin">Nueva contraseña</p>
            <input class="input-text" type="password" name="password" placeholder="Nueva contraseña" required><br><br>
            <input class="submit" type="submit" value="Actualizar">
        </form>
            </center>
    <?php
    } else {
        // Recibir los datos del formulario
        $usuario_id = $_POST["usuario_id"];
        $nuevo_username = $_POST["nuevo_username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Montar la sentencia SQL
        // Usar PASSWORD() si se está usando MySQL con cifrado
        $sql = "UPDATE usuarios SET username='$nuevo_username', email='$email', password='$password' WHERE id=$usuario_id";

        // Ejecutar la sentencia de actualización
        if ($conn->query($sql)) {
            echo '<p>Usuario actualizado con éxito</p>';
        } else {
            echo '<p>Hubo un error al actualizar el usuario: ' . $conn->error . '</p>';
        }
    }
    $conn->close();
    ?>
    <p>
        <a href="actuUsuario.php">Actualizar otro registro</a>
    </p>
    <p>
        <a href="index_admin.php">Inicio</a>
    </p>
</div>

</body>
</html>
