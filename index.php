
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
														   
		<input name=" transfer" type="text" class="input transfer" value="Сумма для перевода" onfocus="this.value=''" />
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
if(!empty($button)) {
try {
$transfer = $_POST['transfer'];
if ($transfer== "" ) {
echo "<h3>Не заполнены поля name и email.</h3>";
}
?>
