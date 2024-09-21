<?php
include_once "index_conex.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM notificaciones WHERE id=$id";

    if ($conn->query($sql)) {
        echo "Notificación eliminada";
        header('Location: leerNoti.php');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
