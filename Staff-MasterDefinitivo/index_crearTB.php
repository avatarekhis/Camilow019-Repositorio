<?php
include_once "index_conex.php";

$sql = "CREATE TABLE calendario (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    hora VARCHAR(50)
    );";
    if (mysqli_query($conn, $sql)) {
    echo "tabla creada";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>