<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbstaff= "staffmaster";

$conn = mysqli_connect($servername, $username, $password, $dbstaff);

if (!$conn) {
die("conexion fallida: " . mysqli_connect_error());
}
echo "";
?>