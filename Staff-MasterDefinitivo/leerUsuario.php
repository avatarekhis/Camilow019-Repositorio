<?php
include_once "index_conex.php";

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="styleAdmin.css">
</head>
<body>
<header class="header">
    <img id="logo" src="IMG/logostfm-whitepng.png" alt="">
    <h1 id="titulo">Staff-Master: Administrador</p>
    <a class="atras" href="index_admin.php">Atrás</a>
    </header>
    <center><h1>Lista de Usuarios</h1></center>
   <article class="leerUser">
   <table class="tableLeer" border="1">
        <tr>
            <th>ID</th>
            <th>Nombre de Usuario</th>
            <th>Email</th>
            <th>Fecha de Registro</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['fecha_registro']; ?></td>
        </tr>
        <?php } ?>
    </table>
   </article>
</body>
</html>
