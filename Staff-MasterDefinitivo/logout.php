<?php
session_start();
session_destroy();
echo "<script>alert('Se cerró su sesión');</script>";
header('Location: index_principal.html');
?>
