<?php
session_start();

 $conn = new PDO("sqlsrv:server = tcp:deneg.database.windows.net,1433; Database = asus", "den", "Rosbank20");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>
