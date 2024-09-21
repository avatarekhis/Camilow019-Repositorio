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
        <form action="index_controlador_login.php" method="post">
            <br><br>
            <center><h2>Iniciar Sesion: Administrador</h2></center>
            <br>
            <span>Usuario:</span><br><br>
            <input type="text" id="caja_texto" name="user"><br>
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
