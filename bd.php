<?php
session_start();

mysql_connect ("asus","den","Rosbank20");
mysql_select_db ("deneg");
mysql_query("SET NAMES utf8");

$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>
