<?php

try {
  $conn = new PDO("sqlsrv:server = tcp:deneg.database.windows.net,1433; Database = asus", "den", "Rosbank20");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
  print("Ошибка подключения к SQL Server.");
  die(print_r($e));
}

session_start();

?>
