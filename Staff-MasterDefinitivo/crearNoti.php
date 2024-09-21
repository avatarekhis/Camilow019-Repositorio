<?php
include_once "index_conex.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO notificaciones (titulo, mensaje) VALUES ('$titulo', '$mensaje')";
    
    if ($conn->query($sql)) {
        echo "<script>alert('Notificación creada')</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Crear Notificación</title>
    <link rel="stylesheet" href="Style/index.css">

</head>
<body>
   <style>
    #titulo{
        margin: 40px;
    }
    textarea{
        font-family: Arial, Helvetica, sans-serif;
    }

        #a{
            text-decoration: none;
            padding: 20px;
            background-color: #64c27b;
            color: black;
            border-radius: 50px;
            transition: 0.5s;
            margin: 20px;
            font-weight: bold;
        }
        #a:hover{
            padding: 15px;
            background-color: black;
            color:white;
            transition: 0.9;
            width: 20%;
        }
        
   </style>

<div id="dashboard">
        <img src="IMG/Logo PNG.png" alt="" id="logo">
        <br><br><br>
      <center>  <a id="a" href="index_notificaciones.php">VOLVER</a></center>
    </div>
<br><br>

    <div id="padre">
        
        <div id="hijo_ajuste">
          
     <center>
     <h1 id="titulo">Crear Notificación:</h1><br><br><br><br><br><br><br>
    <form action="crearNoti.php" method="POST">
        <p>Título:</p>
        <input class="input-text" type="text" name="titulo" required><br><br>
        <p>Mensaje:</p>
        <textarea class="input-text" name="mensaje" required></textarea><br><br>
        <input class="submit" type="submit" value="Crear"><br><br><br>
        <a class="submit" href="leerNoti.php">Ver notificación</a>
    </form>
     </center>
    </div>
        </div>
</body>
</html>
