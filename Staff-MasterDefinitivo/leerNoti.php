<?php
include_once "index_conex.php";

$sql = "SELECT * FROM notificaciones ORDER BY fecha DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Notificaciones</title>
    <link rel="stylesheet" href="Style/index.css">
</head>
<body>
    <style>
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
        table{
            background-color: white;
            border-collapse: collapse;
            width: 95%;
        }
        td{
            padding: 10px;
        }
        .submit-table{
            padding: 9px;
            border-radius: 70px;
            width: 30%;
            font-size: 13px;
            background-color: #9bfab0;
            border: none;
            transition: 0.2s;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .submit-table:hover{
            background-color: black;
            color: white;
            transition: 0.5s;
            width: 50%;
            cursor: pointer;
            border: 1px solid white;
}
    </style>
<div id="dashboard">
        <img src="IMG/Logo PNG.png" alt="" id="logo">
        <br><br><br>
      <center><a id="a" href="crearNoti.php">VOLVER</a></center>
    </div>
<br><br>

<div id="padre">
        
        <div id="hijo_ajuste">
          
     <center><br><br>
    <a class="submit" href="crearNoti.php">Crear nueva notificación</a><br><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Mensaje</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['titulo']; ?></td>
            <td><?php echo $row['mensaje']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td>
                <a class="submit-table" href="actuNoti.php?id=<?php echo $row['id']; ?>">Editar</a><br><br>
                <a class="submit-table" href="eliminarNoti.php?id=<?php echo $row['id']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta notificación?');">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
     </center>
    </div>
        </div>

    
</body>
</html>
