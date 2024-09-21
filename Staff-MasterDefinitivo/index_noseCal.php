<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar SH</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
     <style>
        body{
            font-family: "Nunito Sans", sans-serif;
            margin: 0px;
            background-color: #d6fdf8;
        }
        form{
            width: 40%;
            margin-left: 30%; 
            border: solid 1px seagreen; 
            border-radius: 8px;
        }
        table{
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 50%;
        }
        td{
            padding: 15px;
            background-color: white;
        }
        th{
            background-color: white;
            padding: 10px;
        }
        a{
            text-decoration: none;
            padding: 10px;
            background-color: #64c27b;
            color: black;
            border-radius: 50px;
            transition: 0.5s;
            margin: 20px;
        }
        a:hover{
            padding: 8px;
            background-color: black;
            color:white;
            transition: 0.9;
            width: 20%;
        }
        
     </style>
</head>
<body>
<center><h1>Registros</h1></center>
<?php
include_once "index_conex.php";
$sql ="SELECT * FROM calendario ";
echo '<table border="1">
        <tr> 
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha y hora</th>
            <th></th>
            <th></th>
        </tr>';
if ($rta = $conn -> query($sql)) {
    while($row = $rta -> fetch_assoc()){
        $id = $row["id"];
        $nom = $row["nombre"];
        $apell = $row["apellido"];
        $hora = $row["hora"];
    echo "<tr>
            <td>$id</td>
            <td>$nom</td>
            <td>$apell</td>
            <td>$hora</td>
            <td> <a href='index_actualizarCal.php'> Actualizar </a> </td>
            <td> <a href='index_borrarCal.php'> Eliminar </a> </td>
        </tr> ";
    }
    $rta -> free();
}?>
<a href="index_formCalendario.php">VOLVER</a>
</body>
</html>
