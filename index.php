
	<html>
	<Title>Номер карты</Title>
		<legend>Перевод денежных средств</legend>
<head>
<title>Background-image</title>
</head>
	<table>
<body Перевод денежных средств>
<div class="content">
	<br Перевод денежных /br>
		
		
	
		<select name="country">
<option value="">Выберите страну для перевода</option>
<option value="Russia">Russia</option>
<option value="USA">USA</option>
<option value="Germany">Germany</option>
<option value="Japan">Japan</option>
<option value="China">China</option>
</select>												   
														   
		<input name="amount for transfer" type="text" class="input transfer" value="Сумма для перевода" onfocus="this.value=''" />
		<select name="country">
<option value="">Валюта</option>
<option value="Russia">Рубаль</option>
<option value="USA">Доллар</option>
<option value="Europa">Euro</option>

</select>
	<input type="button" value="Далее" name="buttonreg" onClick="but1()" />
		       
	<script>
function but1()
{
     window.location = "sugnup.php"
}
</script>
    </div>

					   </table>
</body>
</html>
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
$name = $_POST['name'];
$email = $_POST['email'];
$date = date("Y-m-d");
$country = $_POST['country'];
if ($name == "" || $country == "") {
echo "<h3>Не заполнены поля name и email.</h3>";
}
else {
$sql_insert ="INSERT INTO registration_on (name, email, date, country) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql_insert);
$stmt->bindValue(1, $name);
$stmt->bindValue(2, $email);
$stmt->bindValue(3, $date);
$stmt->bindValue(4, $country);
$stmt->execute();
echo "<h3>Вы зарегистрировались!</h3>";
}
}
catch(Exception $e) {
die(var_dump($e));
}
}
$sql_select = "SELECT * FROM registration_on";
$stmt = $conn->query($sql_select);
$stmt->execute();
if(isset($_POST['filter'])) {
$gender = $_POST['country'];
$sql_select = "SELECT * FROM registration_on WHERE country like :country";
$stmt = $conn->prepare($sql_select);
$stmt->execute(array(':country'=>$country.'%'));
}
$registrants = $stmt->fetchAll();
if(count($registrants) > 0) {
echo "<h2>Люди, которые зарегистрированы:</h2>";
echo "<table>";
echo "<tr><th>Name</th>";
echo "<th>Email</th>";
echo "<th>Country</th>";

foreach($registrants as $registrant) {
echo "<td>".$registrant['name']."</td>";
echo "<td>".$registrant['email']."</td>";
echo "<td>".$registrant['country']."</td>";

}
echo "</table>";
}
else {
echo "<h3>В настоящее время никто не зарегистрирован.</h3>";
}
?>


