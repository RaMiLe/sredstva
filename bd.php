<?php
require_once('rb.php');
$dsn = 'mysql:host=deneg;dbname=asus';
$login = 'den';
$pass = Rosbank20;
try {
  R::setup($dsn, $login, $pass);
}
catch (Exception $ex) {
  echo 'Не связанный '.$ex->getMessage();
}

session_start();
 ?>
