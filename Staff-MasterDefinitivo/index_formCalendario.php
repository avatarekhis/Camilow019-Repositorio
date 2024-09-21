<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="Style/index.css">
</head>
<body>
<style>
        #dashboard {
            height: 126%;
            width: 25%;
        }
        #padre {
            width: 100%;
            margin-left: 530px;
            margin-top: 150px;
        }
        body{
            overflow-x: hidden;
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

<div id="padre">
        <div id="hijo">
            <div id="titulo_box">
                <span id="xd"><h1>Añade hora de llegada</h1></span><br>
            </div>
        <center>
        <form  action="index_insercioncal.php" method="POST">
    <div class="input-container">
    <p>Nombre:</p>
    <input class="input-text" type="text" name="nomb" placeholder="Nombre" required><br>
    <p>Apellido:</p>
    <input class="input-text" type="text" name="apel" placeholder="Apellido" required><br>
    <p>Fecha y hora:</p>
    <input class="date" type="date" name="date" placeholder="Hora" required><br><br>
    <input class="submit" type="submit" value="Enviar">
    </div>
    </form>

        </center>

        </div>
</body>
</html>