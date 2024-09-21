<?php
include_once "index_conex.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM notificaciones WHERE id=$id";
    $result = $conn->query($sql);
    $notificacion = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $mensaje = $_POST['mensaje'];

    $sql = "UPDATE notificaciones SET titulo='$titulo', mensaje='$mensaje' WHERE id=$id";

    if ($conn->query($sql)) {
        echo "<script>alert('Notificación actualizada')</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Notificación</title>
    <link rel="stylesheet" href="Style/index.css">
</head>
<body>
    <style>
        #titulo{
            margin: 40px;
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
      <center><a id="a" href="leerNoti.php">VOLVER</a></center>
    </div>
<br><br>


    
    <div id="padre">
        
        <div id="hijo_ajuste">
          
     <center>
     <h1 id="titulo">Editar Notificación:</h1><br><br><br><br><br><br><br><br>
    <form action="actuNoti.php?id=<?php echo $notificacion['id']; ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $notificacion['id']; ?>">
        <label for="titulo">Título:</label><br><br>
        <input class="input-text"  type="text" name="titulo" value="<?php echo $notificacion['titulo']; ?>" required><br><br>
        <label for="mensaje">Mensaje:</label><br><br>
        <textarea class="input-text"  name="mensaje" required><?php echo $notificacion['mensaje']; ?></textarea><br><br>
        <input class="submit" type="submit" value="Actualizar"><br><br><br>
        <a class="submit" href="leerNoti.php">Ver notificación</a>
        
    </form>
     </center>
    </div>
        </div>
</body>
</html>
