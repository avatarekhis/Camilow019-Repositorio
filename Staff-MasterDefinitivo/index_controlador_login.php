<?php

$valid_user = "admin-access";
$valid_pass = "12345";

if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    if ($user === $valid_user && $password === $valid_pass) {
        include_once("index_admin.php");
    } else {
        include_once("error_login.php");
    }
} else {
    echo "Por favor, complete todos los campos.";
}
?>
