<?php
session_start();
include_once "index_conex.php";

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header('Location: index_login_usuarios.php'); // Redirigir si no ha iniciado sesión
    exit();
}

// Obtener los datos del usuario
$username = $_SESSION['username'];
$sql = "SELECT * FROM usuarios WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Error al obtener los datos del usuario.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="Style/index.css">
</head>
<body>
    <style>
        #dashboard {
            height: 126%;
            width: 25%;
        }
        #padre {
            width: 70%;
            margin-left: 450px;
        }
    </style>

    <div id="dashboard">
        <img src="IMG/Logo PNG.png" alt="" id="logo">
        <br><br><br>

        <a href="index_notificaciones.php" id="option-a"><img src="IMG/notificacion.png" alt="" id="icon"><span id="option">Notificaciones</span></a>
        <a href="index_formCalendario.php" id="option-a"><img src="IMG/calendario.png" alt="" id="icon"> <span id="option">Calendario</span></a>
        <a href="index_perfil.php" id="option-a"><img src="IMG/usuario.png" alt="" id="icon"> <span id="option">Perfil</span></a>
        <a href="" id="option-a"><img src="IMG/ajuste.png" alt="" id="icon"> <span id="option">Ajustes</span></a>
        <a href="logout.php" id="option-a"><img src="IMG/cerrar-sesion.png" alt="" id="icon"> <span id="option">Salir</span></a>
    </div>

    <div id="encabezado">
        <img src="IMG/imagen.png" alt="" id="logo-encabezado">
        <span id="nombre-perfil"><?php echo "<p id='user'>Bienvenido ".$user['username']."!</p>"; ?></span>
    </div>
    
    <br><br>

    <div id="padre">
        <div id="hijo">
            <div id="titulo_box">
                <span id="xd"><h1>Datos Personales</h1></span><br><br><br><br><br>
            </div>
            <div id="contenido_hijo">
                <p>Nombre completo: <?php echo $user['username']; ?></p>

                <p>Numero de id: <?php echo $user['id']; ?></p><br><br>
                <input type="button" name="" id="boton" value="Editar">
            </div>
        </div>

        <div id="hijo">
            <div id="titulo_box">
                <span id="xd"><h1>Datos Empresariales</h1></span><br><br><br><br><br>
            </div>
            
            <div id="contenido_hijo">
                <p>Empresa afiliada: Staff-Master</p>
                <p>Ver inasistencias...</p>
                <p>Ver asistencias...</p>
                <p>Ver fallas...</p>
                <p>Descargar certificado laboral</p>
                <input type="button" name="" id="boton" value="Descargar">
            </div>
        </div> 
    </div>    
</body>
</html>
