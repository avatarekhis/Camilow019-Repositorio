<?php
include_once "index_conex.php";

$nom = $_POST["nomb"];
$ape = $_POST["apel"];
$hora = $_POST["date"];

$sql = "INSERT INTO calendario (nombre, apellido, hora) VALUES ('$nom', '$ape', '$hora');";

if ($conn->query($sql)) {
    echo "Registro creado";

    // Redirigir después de insertar los datos
    header('Location: index_noseCal.php');
    exit(); // Detener la ejecución para evitar que se siga ejecutando el código después de la redirección
} else {
    echo "Error, no se ejecutó la sentencia";
}
?>
