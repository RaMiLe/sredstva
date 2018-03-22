
  <?php
 <?php
-if (isset($_POST['buttonreg'])) {
+try {
-	$transfer=$_POST['transfer'];
+    $conn = new PDO("sqlsrv:server = tcp:deneg.database.windows.net,1433; Database = asus", "den", "Rosbank20");
-	if(empty($transfer)) {
+    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
-		echo '<div>Поле не заполнено!</div><hr>';
+$sql = "CREATE TABLE Card (
-	}
+id INT NOT NULL IDENTITY(1,1)
-}
+PRIMARY KEY (Ncard),
-?>
+Ncard varchar(30) NOT NULL,
-<html>
+Balance INT NOT NULL,
-	<Title>Номер карты</Title>
+Phone varchar(30) NOT NULL
-		<legend>Перевод денежных средств</legend>
-<head>
-<title>Background-image</title>
-</head>
-	
-<body Перевод денежных средств>
-<div class="content">
-	<form action="sugnup.php" method="POST">
-	<br Перевод денежных /br>
-		
-		
-	
-		<select name="country">
-<option value="">Выберите страну для перевода</option>
-<option value="Russia">Russia</option>
-<option value="USA">USA</option>
-<option value="Germany">Germany</option>
-<option value="Japan">Japan</option>
-<option value="China">China</option>
-</select>												   
-														   
-		<input name="transfer" type="text" class="input transfer">
-		<select name="country">
-<option value="">Валюта</option>
-<option value="Russia">Рубаль</option>
-<option value="USA">Доллар</option>
-<option value="Europa">Euro</option>
-
-</select>
-	<input type="submit" value="Далее" name="buttonreg">
-		       
-	
-
-	</form>
-    </div>
 
 
-</body>

-</html>
