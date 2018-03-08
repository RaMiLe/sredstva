<?php

require_once('db.php');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password_1 = $_POST['password-1'];
    $password_2 = $_POST['password-2'];
    $email = $_POST['email'];

    if (!empty($username) && !empty($password_1) && !empty($password_2) && ($password_1 == $password_2)) {
      $sql_select = "SELECT * FROM signup WHERE username = '$username'";
      $stmt = $conn->query($sql_select);
      $stmt->execute();
      $data = $stmt->fetchAll();

      if(count($data) == 0) {
        $sql_insert = "INSERT INTO signup (username, password, email) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $password_1);
        $stmt->bindValue(3, $email);
        $stmt->execute();
        
        echo 'Вы зарегистрированны!';
        exit();
          
      }
      else {
        echo 'Такой пользователь уже существует!';
      }
    }
  }
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>22 лучших формы входа и регистрации | Vladmaxi.net</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<body>

<!-- vladmaxi top bar -->
    <div class="vladmaxi-top">
        <a href="http://vladmaxi.net" target="_blank">Главная Vladmaxi.net</a>
        <span class="right">
        <a href="http://vladmaxi.net/web-developer/css/22-luchshix-formy-vxoda-i-registracii-na-sajte-v-html-css.html">
                <strong>Вернуться назад к статье</strong>
            </a>
        </span>
    <div class="clr"></div>
    </div>
<!--/ vladmaxi top bar -->

<div id="wrapper">
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
	
<form name="login-form" class="login-form" action="" method="post">

    <div class="header">
		<h1>Авторизация</h1>
		<span>Введите ваши регистрационные данные для входа в ваш личный кабинет. </span>
    </div>

    <div class="dws-input">
          <input type="text" name="username" placeholder="Придумайте логин">
          <input type="password" name="password-1" placeholder="Придумайте пароль">
          <input type="password" name="password-2" placeholder="Введите пароль еще раз">
          <input type="text" name="email" placeholder="Ваш email...">
        </div>
        <input class="dws-submit" type="submit" name="submit" value="Регистрация">
    </div>

</form>
</div>
<div class="gradient"></div>

<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>
</body>
</html>
