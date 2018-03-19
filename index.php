<html>
<head>
<Title>Перевод денежных средств</Title>
<style type="text/css">
body { background-color:
#fff; border-top: solid 10px #000;
color: #333; font-size: .85em;
margin: 20; padding: 20;
font-family: "Segoe UI",
Verdana, Helvetica, Sans-Serif;
}
h1, h2, h3,{ color: #000;
margin-bottom: 0; padding-bottom: 0; }
h1 { font-size: 2em; }
h2 { font-size: 1.75em; }
h3 { font-size: 1.2em; }
table { margin-top: 0.75em; }
th { font-size: 1.2em;
text-align: left; border: none; padding-left: 0; }
td { padding: 0.25em 2em 0.25em 0em;
border: 0 none; }
</style>
</head>
<body>
<h1>Register here!</h1>
<p>Fill in your name and
email address, then click <strong>Submit</strong>
to register.</p>
<form method="post" action="index.php" enctype="multipart/form-data" >
<input type ="text" name ="amount for transfer" id ="name" placeholder ="Введите сумму для перевода">
<select name="страны">
<option value="">страны</option>
<option value="Russia">Russia</option>
<option value="USA">USA</option>
<option value="Germany">Germany</option>
<option value="Japan">Japan</option>
<option value="China">China</option>
</select>
	<select name="corrency">
<option value="">Валюта</option>
<option value="Рубаль">Р</option>
<option value="USA">Dollar</option>
<option value="Euro">Eoro</option>
<option value="Japan">Japan</option>
<option value="China">China</option>
</select>
<input type ="submit" name ="submit" value ="Отправить">
<input type="submit" name="filter" value="Фильтр">
</form>

<?php
$dsn = "sqlsrv:server = tcp:deneg.database.windows.net,1433; Database = asus";
$username = "den";
$password = "Rosbank20";
try {
$conn = new PDO($dsn, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
print("Ошибка подключения к SQL Server.");
die(print_r($e));
}
if(!empty($_POST)) {
try {
$transfer = $_POST['transfer'];
$corrency = $_POST['corrency'];
$date = date("Y-m-d");
$country = $_POST['country'];
if ($transfer == "" || $corrency == "") {
echo "<h3>Не заполнены поля cумма для перевода и валюта.</h3>";
}
else {
{
     window.location = "perevod.php"
}
}
}

?>
	

