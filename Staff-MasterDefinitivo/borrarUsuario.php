<!DOCTYPE html>
<html lang="es">

<head>
    <title>Borrar registros de la base de datos</title>
    <link rel="stylesheet" href="styleAdmin.css">
</head>
<body>
<header class="header">
    <img id="logo" src="IMG/logostfm-whitepng.png" alt="">
    <h1 id="titulo">Staff-Master: Administrador</p>
    <a class="atras" href="index_admin.php">Atrás</a>
    </header>
<div>
    <center><h1>Borrar un registro de usuario</h1></center>
    <?php
    include "index_conex.php"; // Conexión a la base de datos

    if (!$_POST) {
        // Crear la sentencia SQL y ejecutarla para obtener usuarios
        $sql = "SELECT id, username FROM usuarios ORDER BY username";
        $result = $conn->query($sql);
        ?>
      <center>
      <form class="form-borrar" method="POST" action="borrarUsuario.php">
            <p class="p-admin">Usuario</p><br><br>
            <?php
            echo '<select name="usuario_id" required>';
            echo '<option value="">Selecciona un usuario</option>';
            // Mostrar los registros en forma de menú desplegable
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["id"] . '">' . $row["username"] . '</option>';
            }
            $result->free_result();
            ?>
            </select>
            <br><br><br>
            <input class="submit" type="submit" value="Borrar">
        </form>
      </center><br><br>
    <?php
    } else {
        // Recibir los datos del formulario
        $usuario_id = $_POST["usuario_id"];

        // Crear la sentencia SQL
        $sql = "DELETE FROM usuarios WHERE id=$usuario_id";

        // Ejecutar la sentencia de borrado
        if ($conn->query($sql)) {
            echo '<center><p style="color:#9bfab0;">Usuario borrado con éxito</p></center>';
        } else {
            echo '<p>Hubo un error al borrar el usuario: ' . $conn->error . '</p>';
        }
    }
    $conn->close();
    ?>
    <center class="form-borrarDos">
    <p>
        <a class="submit" href="borrarUsuario.php">Borrar otro registro</a>
    </p><br><br>
    <p>
        <a class="submit" href="index_admin.php">Volver a principal</a>
    </p>
    </center>
</div>

</body>
</html>
