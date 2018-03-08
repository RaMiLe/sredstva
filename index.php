<?php

include_once("bd.php");

if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if (!empty($login ) && !empty($password)) {

      $_SESSION["username"] = $login;

      $sql_select = "SELECT 'id', 'username' FROM signup WHERE username = '$login' AND password = '$password'";
      $stmt = $conn->query($sql_select);
      $stmt->execute();
      $data = $stmt->fetchAll();
    }
    else {
      echo 'Поля заполнены неправельно';
    }
  }
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
		<title>Вход</title>
	</head>
<body>
	<div class="box">
		<form action="index.php" method="POST">
      <div class="box-input">
        <label>Логин</label>
    		<input type="text" name="login">
      </div>
      <div class="box-input">
        <label>Пароль</label>
    		<input type="password" name="password">
      </div>
      <div class="box-submit">
        <input type="submit" name="submit" value="OK">
      </div>
      <a href="sugnup.php">Регистрация</a>
    </form>
	</div>
</body>
</html>
