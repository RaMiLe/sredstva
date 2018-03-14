<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Вход</title>
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

    <div class="content">
		<input name="pasport" type="text" class="input pasport" value="Введите серию и номер пампорта" onfocus="this.value=''" />
		<input name="password" type="password" class="input password" value="Пароль" onfocus="this.value=''" />
	    <select name="country">
<option value="">currency</option>
<option value="Russia">Russia</option>
<option value="USA">USA</option>
<option value="Germany">Germany</option>
<option value="Japan">Japan</option>
<option value="China">China</option>
</select>
    </div>

    <div class="footer">
		<input type="submit" name="submit" value="ВОЙТИ" class="button" />
		<a href="sugnup.php">Регистрация</a>
	    <a href="perevod.php">Войти</a>
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
